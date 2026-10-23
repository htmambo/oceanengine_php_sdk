<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AicMaterialGetV30OrderField
{
    public const CREATED_TIME_AicMaterialGetV30OrderField = 'CREATED_TIME';
    public const UPDATE_TIME_AicMaterialGetV30OrderField = 'UPDATE_TIME';

    public const ALLOWED_VALUES = [
        self::CREATED_TIME_AicMaterialGetV30OrderField,
        self::UPDATE_TIME_AicMaterialGetV30OrderField,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AicMaterialGetV30OrderField', $value));
        }
        return (string) $value;
    }
}
