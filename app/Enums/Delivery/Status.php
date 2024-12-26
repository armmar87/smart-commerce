<?php

namespace App\Enums\Delivery;

use App\Traits\Enum\JsonSerializable;

enum Status: string
{
    use JsonSerializable;

    case PENDING = 'pending';
    case IN_TRANSIT = 'in_transit';
    case DELIVERED = 'delivered';
}
