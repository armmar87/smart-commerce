<?php

namespace App\Enums\Driver;

use App\Traits\Enum\JsonSerializable;

enum Type: string
{
    use JsonSerializable;

    case COURIER = 'courier';
    case MANAGER = 'manager';
}
