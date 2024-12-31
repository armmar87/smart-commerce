<?php

namespace App\Enums;

use App\Traits\Enum\JsonSerializable;

enum Role: string
{
    use JsonSerializable;

    case ADMIN = 'admin';
    case COMPANY = 'company';
    case STORE = 'store';
    case COURIER = 'courier';
    case MANAGER = 'manager';
}
