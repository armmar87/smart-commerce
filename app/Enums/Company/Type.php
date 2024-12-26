<?php

namespace App\Enums\Company;

use App\Traits\Enum\JsonSerializable;

enum Type: string
{
    use JsonSerializable;

    case STORE = 'store';
    case IMPORTER = 'importer';
}
