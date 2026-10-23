<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdGetV2DataConvertedTimeDuration
{
    public const TWELVE_MONTH_AdGetV2DataConvertedTimeDuration = 'TWELVE_MONTH';
    public const TODAY_AdGetV2DataConvertedTimeDuration = 'TODAY';
    public const THREE_MONTH_AdGetV2DataConvertedTimeDuration = 'THREE_MONTH';
    public const ONE_MONTH_AdGetV2DataConvertedTimeDuration = 'ONE_MONTH';
    public const SEVEN_DAY_AdGetV2DataConvertedTimeDuration = 'SEVEN_DAY';
    public const SIX_MONTH_AdGetV2DataConvertedTimeDuration = 'SIX_MONTH';
    public const NONE_AdGetV2DataConvertedTimeDuration = 'NONE';

    public const ALLOWED_VALUES = [
        self::TWELVE_MONTH_AdGetV2DataConvertedTimeDuration,
        self::TODAY_AdGetV2DataConvertedTimeDuration,
        self::THREE_MONTH_AdGetV2DataConvertedTimeDuration,
        self::ONE_MONTH_AdGetV2DataConvertedTimeDuration,
        self::SEVEN_DAY_AdGetV2DataConvertedTimeDuration,
        self::SIX_MONTH_AdGetV2DataConvertedTimeDuration,
        self::NONE_AdGetV2DataConvertedTimeDuration,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdGetV2DataConvertedTimeDuration', $value));
        }
        return (string) $value;
    }
}
