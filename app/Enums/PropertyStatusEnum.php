<?php

    namespace App\Enums;

    enum PropertyStatusEnum : string {

        case SOLD = 'Sold';

        case HOLD = 'On Hold';

        case SALE = 'On Sale';
    }
