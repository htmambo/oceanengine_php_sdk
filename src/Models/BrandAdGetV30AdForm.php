<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandAdGetV30AdForm
{
    public const Enum_1_BrandAdGetV30AdForm = 1;
    public const Enum_2_BrandAdGetV30AdForm = 2;
    public const Enum_3_BrandAdGetV30AdForm = 3;
    public const Enum_4_BrandAdGetV30AdForm = 4;
    public const Enum_5_BrandAdGetV30AdForm = 5;
    public const Enum_6_BrandAdGetV30AdForm = 6;
    public const Enum_7_BrandAdGetV30AdForm = 7;
    public const Enum_8_BrandAdGetV30AdForm = 8;

    public const ALLOWED_VALUES = [
        self::Enum_1_BrandAdGetV30AdForm,
        self::Enum_2_BrandAdGetV30AdForm,
        self::Enum_3_BrandAdGetV30AdForm,
        self::Enum_4_BrandAdGetV30AdForm,
        self::Enum_5_BrandAdGetV30AdForm,
        self::Enum_6_BrandAdGetV30AdForm,
        self::Enum_7_BrandAdGetV30AdForm,
        self::Enum_8_BrandAdGetV30AdForm,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandAdGetV30AdForm', $value));
        }
        return (string) $value;
    }
}
