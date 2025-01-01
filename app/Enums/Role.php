<?php

namespace App\Enums;

use App\Traits\Enum\JsonSerializable;

enum Role: string
{
    use JsonSerializable;

    case SUPER_ADMIN = 'super_admin';
    case ADMIN = 'admin';
    case COMPANY = 'company';
    case STORE = 'store';
    case COURIER = 'courier';
    case MANAGER = 'manager';

    public static function map(): array
    {
        return [
            self::COMPANY->value => 'Company',
            self::STORE->value => 'Store',
            self::COURIER->value => 'Courier',
            self::MANAGER->value => 'Manager',
        ];
    }

//    public static function toName($value): string
//    {
//        return match ($value) {
//            self::ADMIN->value => 'Booking',
//            self::COMPANY->value => 'NotAvailable',
//            self::COMPANY->value => 'Subscription',
//        };
//    }
}
