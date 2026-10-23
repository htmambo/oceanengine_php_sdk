<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandAdGetV30AdStatus
{
    public const Enum_1_BrandAdGetV30AdStatus = 1;
    public const Enum_10_BrandAdGetV30AdStatus = 10;
    public const Enum_11_BrandAdGetV30AdStatus = 11;
    public const Enum_12_BrandAdGetV30AdStatus = 12;
    public const Enum_2_BrandAdGetV30AdStatus = 2;
    public const Enum_3_BrandAdGetV30AdStatus = 3;
    public const Enum_4_BrandAdGetV30AdStatus = 4;
    public const Enum_5_BrandAdGetV30AdStatus = 5;
    public const Enum_6_BrandAdGetV30AdStatus = 6;
    public const Enum_7_BrandAdGetV30AdStatus = 7;
    public const Enum_8_BrandAdGetV30AdStatus = 8;
    public const Enum_9_BrandAdGetV30AdStatus = 9;

    public const ALLOWED_VALUES = [
        self::Enum_1_BrandAdGetV30AdStatus,
        self::Enum_10_BrandAdGetV30AdStatus,
        self::Enum_11_BrandAdGetV30AdStatus,
        self::Enum_12_BrandAdGetV30AdStatus,
        self::Enum_2_BrandAdGetV30AdStatus,
        self::Enum_3_BrandAdGetV30AdStatus,
        self::Enum_4_BrandAdGetV30AdStatus,
        self::Enum_5_BrandAdGetV30AdStatus,
        self::Enum_6_BrandAdGetV30AdStatus,
        self::Enum_7_BrandAdGetV30AdStatus,
        self::Enum_8_BrandAdGetV30AdStatus,
        self::Enum_9_BrandAdGetV30AdStatus,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandAdGetV30AdStatus', $value));
        }
        return (string) $value;
    }
}
