<?php

declare(strict_types=1);

namespace App\Helpers;

use Illuminate\Support\Str;

class EnumHelper
{
    public static function values(array $cases = []): array
    {
        return array_column($cases, 'value');
    }

    public static function toArray(array $cases = []): array
    {
        $data = [];
        foreach ($cases as $case) {
            $data[$case->name] = $case->value;
        }

        return $data;
    }

    public static function toOptionArray(array $cases = []): array
    {
        $data = [];
        foreach ($cases as $case) {
            $data[$case->value] = Str::ucfirst($case->value);
        }

        return $data;
    }
}
