<?php

namespace App\Enums;

enum PropertyTypeEnum : string {

    case SINGLE = 'Single Family';
    case MULTIFAMILY = 'Multi Family';
    case TOWNHOUSE = 'Townhouse';
    case BUNGALOW = 'Bungalow';
}
