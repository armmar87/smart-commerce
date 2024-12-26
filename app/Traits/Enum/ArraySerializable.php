<?php

namespace App\Traits\Enum;

trait ArraySerializable
{
    use Names;
    use Values;

    public static function array(): array
    {
        return array_combine(static::names(), static::values());
    }
}
