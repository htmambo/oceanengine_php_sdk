<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdGetV2DataStoreproUnit
{
    public const STORE_AdGetV2DataStoreproUnit = 'STORE';
    public const STORE_ACTIVITY_AdGetV2DataStoreproUnit = 'STORE_ACTIVITY';

    public const ALLOWED_VALUES = [
        self::STORE_AdGetV2DataStoreproUnit,
        self::STORE_ACTIVITY_AdGetV2DataStoreproUnit,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdGetV2DataStoreproUnit', $value));
        }
        return (string) $value;
    }
}
