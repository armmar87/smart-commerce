<?php

namespace App\Enums\Driver;

use App\Traits\Enum\JsonSerializable;

enum Vehicle: string
{
    use JsonSerializable;

    case BIKE = 'bike';
    case CAR = 'car';
    case VAN = 'van';
}
