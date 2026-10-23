<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandCreativeGetV30CreativeStatus
{
    public const Enum_2_BrandCreativeGetV30CreativeStatus = 2;
    public const Enum_3_BrandCreativeGetV30CreativeStatus = 3;
    public const Enum_4_BrandCreativeGetV30CreativeStatus = 4;
    public const Enum_41_BrandCreativeGetV30CreativeStatus = 41;
    public const Enum_0_BrandCreativeGetV30CreativeStatus = 0;

    public const ALLOWED_VALUES = [
        self::Enum_2_BrandCreativeGetV30CreativeStatus,
        self::Enum_3_BrandCreativeGetV30CreativeStatus,
        self::Enum_4_BrandCreativeGetV30CreativeStatus,
        self::Enum_41_BrandCreativeGetV30CreativeStatus,
        self::Enum_0_BrandCreativeGetV30CreativeStatus,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandCreativeGetV30CreativeStatus', $value));
        }
        return (string) $value;
    }
}
