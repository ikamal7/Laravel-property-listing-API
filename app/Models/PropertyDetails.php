<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'property_id',
        'price',
        'bedrooms',
        'bathrooms',
        'sqft',
        'price_per_sqft',
        'property_type',
        'status',
    ];
}
