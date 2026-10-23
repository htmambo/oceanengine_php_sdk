<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdCreateV10AudienceActionDays
{
    public const Enum_7_QianchuanAdCreateV10AudienceActionDays = 7;
    public const Enum_15_QianchuanAdCreateV10AudienceActionDays = 15;
    public const Enum_30_QianchuanAdCreateV10AudienceActionDays = 30;
    public const Enum_60_QianchuanAdCreateV10AudienceActionDays = 60;
    public const Enum_90_QianchuanAdCreateV10AudienceActionDays = 90;
    public const Enum_180_QianchuanAdCreateV10AudienceActionDays = 180;
    public const Enum_365_QianchuanAdCreateV10AudienceActionDays = 365;

    public const ALLOWED_VALUES = [
        self::Enum_7_QianchuanAdCreateV10AudienceActionDays,
        self::Enum_15_QianchuanAdCreateV10AudienceActionDays,
        self::Enum_30_QianchuanAdCreateV10AudienceActionDays,
        self::Enum_60_QianchuanAdCreateV10AudienceActionDays,
        self::Enum_90_QianchuanAdCreateV10AudienceActionDays,
        self::Enum_180_QianchuanAdCreateV10AudienceActionDays,
        self::Enum_365_QianchuanAdCreateV10AudienceActionDays,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdCreateV10AudienceActionDays', $value));
        }
        return (string) $value;
    }
}
