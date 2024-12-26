<?php

namespace App\Enums\Order;

use App\Traits\Enum\JsonSerializable;

enum Status: string
{
    use JsonSerializable;

    case PENDING = 'pending';
    case SHIPPED = 'shipped';
    case DELIVERED = 'delivered';
}
