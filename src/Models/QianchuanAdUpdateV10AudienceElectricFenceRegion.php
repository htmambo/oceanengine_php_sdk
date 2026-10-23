<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdUpdateV10AudienceElectricFenceRegion
{
    public const Enum_1_QianchuanAdUpdateV10AudienceElectricFenceRegion = 1;
    public const Enum_2_QianchuanAdUpdateV10AudienceElectricFenceRegion = 2;

    public const ALLOWED_VALUES = [
        self::Enum_1_QianchuanAdUpdateV10AudienceElectricFenceRegion,
        self::Enum_2_QianchuanAdUpdateV10AudienceElectricFenceRegion,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdUpdateV10AudienceElectricFenceRegion', $value));
        }
        return (string) $value;
    }
}
