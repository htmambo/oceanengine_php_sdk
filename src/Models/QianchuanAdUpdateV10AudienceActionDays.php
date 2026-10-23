<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdUpdateV10AudienceActionDays
{
    public const Enum_7_QianchuanAdUpdateV10AudienceActionDays = 7;
    public const Enum_15_QianchuanAdUpdateV10AudienceActionDays = 15;
    public const Enum_30_QianchuanAdUpdateV10AudienceActionDays = 30;
    public const Enum_60_QianchuanAdUpdateV10AudienceActionDays = 60;
    public const Enum_90_QianchuanAdUpdateV10AudienceActionDays = 90;
    public const Enum_180_QianchuanAdUpdateV10AudienceActionDays = 180;
    public const Enum_365_QianchuanAdUpdateV10AudienceActionDays = 365;

    public const ALLOWED_VALUES = [
        self::Enum_7_QianchuanAdUpdateV10AudienceActionDays,
        self::Enum_15_QianchuanAdUpdateV10AudienceActionDays,
        self::Enum_30_QianchuanAdUpdateV10AudienceActionDays,
        self::Enum_60_QianchuanAdUpdateV10AudienceActionDays,
        self::Enum_90_QianchuanAdUpdateV10AudienceActionDays,
        self::Enum_180_QianchuanAdUpdateV10AudienceActionDays,
        self::Enum_365_QianchuanAdUpdateV10AudienceActionDays,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdUpdateV10AudienceActionDays', $value));
        }
        return (string) $value;
    }
}
