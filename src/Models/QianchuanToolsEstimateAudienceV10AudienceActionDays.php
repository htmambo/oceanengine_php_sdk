<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanToolsEstimateAudienceV10AudienceActionDays
{
    public const Enum_7_QianchuanToolsEstimateAudienceV10AudienceActionDays = 7;
    public const Enum_15_QianchuanToolsEstimateAudienceV10AudienceActionDays = 15;
    public const Enum_30_QianchuanToolsEstimateAudienceV10AudienceActionDays = 30;
    public const Enum_60_QianchuanToolsEstimateAudienceV10AudienceActionDays = 60;
    public const Enum_90_QianchuanToolsEstimateAudienceV10AudienceActionDays = 90;
    public const Enum_180_QianchuanToolsEstimateAudienceV10AudienceActionDays = 180;
    public const Enum_365_QianchuanToolsEstimateAudienceV10AudienceActionDays = 365;

    public const ALLOWED_VALUES = [
        self::Enum_7_QianchuanToolsEstimateAudienceV10AudienceActionDays,
        self::Enum_15_QianchuanToolsEstimateAudienceV10AudienceActionDays,
        self::Enum_30_QianchuanToolsEstimateAudienceV10AudienceActionDays,
        self::Enum_60_QianchuanToolsEstimateAudienceV10AudienceActionDays,
        self::Enum_90_QianchuanToolsEstimateAudienceV10AudienceActionDays,
        self::Enum_180_QianchuanToolsEstimateAudienceV10AudienceActionDays,
        self::Enum_365_QianchuanToolsEstimateAudienceV10AudienceActionDays,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanToolsEstimateAudienceV10AudienceActionDays', $value));
        }
        return (string) $value;
    }
}
