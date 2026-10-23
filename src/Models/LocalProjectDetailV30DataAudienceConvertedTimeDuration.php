<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectDetailV30DataAudienceConvertedTimeDuration
{
    public const ONE_MONTH_LocalProjectDetailV30DataAudienceConvertedTimeDuration = 'ONE_MONTH';
    public const SEVEN_DAY_LocalProjectDetailV30DataAudienceConvertedTimeDuration = 'SEVEN_DAY';
    public const SIX_MONTH_LocalProjectDetailV30DataAudienceConvertedTimeDuration = 'SIX_MONTH';
    public const THREE_MONTH_LocalProjectDetailV30DataAudienceConvertedTimeDuration = 'THREE_MONTH';
    public const TODAY_LocalProjectDetailV30DataAudienceConvertedTimeDuration = 'TODAY';
    public const TWELVE_MONTH_LocalProjectDetailV30DataAudienceConvertedTimeDuration = 'TWELVE_MONTH';

    public const ALLOWED_VALUES = [
        self::ONE_MONTH_LocalProjectDetailV30DataAudienceConvertedTimeDuration,
        self::SEVEN_DAY_LocalProjectDetailV30DataAudienceConvertedTimeDuration,
        self::SIX_MONTH_LocalProjectDetailV30DataAudienceConvertedTimeDuration,
        self::THREE_MONTH_LocalProjectDetailV30DataAudienceConvertedTimeDuration,
        self::TODAY_LocalProjectDetailV30DataAudienceConvertedTimeDuration,
        self::TWELVE_MONTH_LocalProjectDetailV30DataAudienceConvertedTimeDuration,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectDetailV30DataAudienceConvertedTimeDuration', $value));
        }
        return (string) $value;
    }
}
