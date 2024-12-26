<?php

namespace App\Traits\Enum;

trait JsonSerializable
{
    use ArraySerializable;

    public static function jsonSerialize(): string
    {
        return json_encode(static::array());
    }
}
