<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandAdGetV30AppOrigin
{
    public const Enum_1_BrandAdGetV30AppOrigin = 1;
    public const Enum_2_BrandAdGetV30AppOrigin = 2;
    public const Enum_3_BrandAdGetV30AppOrigin = 3;

    public const ALLOWED_VALUES = [
        self::Enum_1_BrandAdGetV30AppOrigin,
        self::Enum_2_BrandAdGetV30AppOrigin,
        self::Enum_3_BrandAdGetV30AppOrigin,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandAdGetV30AppOrigin', $value));
        }
        return (string) $value;
    }
}
