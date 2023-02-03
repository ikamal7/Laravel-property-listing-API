<?php

    use App\Enums\PropertyStatusEnum;
    use App\Enums\PropertyTypeEnum;
    use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_details', function (Blueprint $table) {
            $table->unsignedBigInteger( 'property_id' )->unique();
            $table->float( 'price')->required();
            $table->integer( 'bedrooms' )->required();
            $table->integer( 'bathrooms' )->required();
            $table->float( 'sqft')->required();
            $table->float('price_per_sqft')->required();

            $table->enum( 'property_type', [
                PropertyTypeEnum::SINGLE->value,
                PropertyTypeEnum::MULTIFAMILY->value,
                PropertyTypeEnum::TOWNHOUSE->value,
                PropertyTypeEnum::BUNGALOW->value
            ]);
            $table->enum( 'status', [
                PropertyStatusEnum::SOLD->value,
                PropertyStatusEnum::HOLD->value,
                PropertyStatusEnum::SALE->value
            ])->required();

            $table->foreign( 'property_id' )->references( 'id' )->on( 'properties' )->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property_details');
    }
};
