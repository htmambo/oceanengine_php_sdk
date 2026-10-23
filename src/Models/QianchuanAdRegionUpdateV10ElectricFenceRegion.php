<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdRegionUpdateV10ElectricFenceRegion
{
    public const Enum_1_QianchuanAdRegionUpdateV10ElectricFenceRegion = 1;
    public const Enum_2_QianchuanAdRegionUpdateV10ElectricFenceRegion = 2;

    public const ALLOWED_VALUES = [
        self::Enum_1_QianchuanAdRegionUpdateV10ElectricFenceRegion,
        self::Enum_2_QianchuanAdRegionUpdateV10ElectricFenceRegion,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdRegionUpdateV10ElectricFenceRegion', $value));
        }
        return (string) $value;
    }
}
