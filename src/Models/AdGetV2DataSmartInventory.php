<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdGetV2DataSmartInventory
{
    public const NORMAL_AdGetV2DataSmartInventory = 'NORMAL';
    public const UNIVERSAL_ALL_AdGetV2DataSmartInventory = 'UNIVERSAL_ALL';
    public const UNIVERSAL_AdGetV2DataSmartInventory = 'UNIVERSAL';
    public const SMART_AdGetV2DataSmartInventory = 'SMART';

    public const ALLOWED_VALUES = [
        self::NORMAL_AdGetV2DataSmartInventory,
        self::UNIVERSAL_ALL_AdGetV2DataSmartInventory,
        self::UNIVERSAL_AdGetV2DataSmartInventory,
        self::SMART_AdGetV2DataSmartInventory,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdGetV2DataSmartInventory', $value));
        }
        return (string) $value;
    }
}
