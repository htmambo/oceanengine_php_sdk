<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdDetailGetV10DataAudienceElectricFenceRegion
{
    public const Enum_1_QianchuanAdDetailGetV10DataAudienceElectricFenceRegion = 1;
    public const Enum_2_QianchuanAdDetailGetV10DataAudienceElectricFenceRegion = 2;

    public const ALLOWED_VALUES = [
        self::Enum_1_QianchuanAdDetailGetV10DataAudienceElectricFenceRegion,
        self::Enum_2_QianchuanAdDetailGetV10DataAudienceElectricFenceRegion,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdDetailGetV10DataAudienceElectricFenceRegion', $value));
        }
        return (string) $value;
    }
}
