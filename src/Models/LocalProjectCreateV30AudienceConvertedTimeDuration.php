<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectCreateV30AudienceConvertedTimeDuration
{
    public const ONE_MONTH_LocalProjectCreateV30AudienceConvertedTimeDuration = 'ONE_MONTH';
    public const SEVEN_DAY_LocalProjectCreateV30AudienceConvertedTimeDuration = 'SEVEN_DAY';
    public const SIX_MONTH_LocalProjectCreateV30AudienceConvertedTimeDuration = 'SIX_MONTH';
    public const THREE_MONTH_LocalProjectCreateV30AudienceConvertedTimeDuration = 'THREE_MONTH';
    public const TODAY_LocalProjectCreateV30AudienceConvertedTimeDuration = 'TODAY';
    public const TWELVE_MONTH_LocalProjectCreateV30AudienceConvertedTimeDuration = 'TWELVE_MONTH';

    public const ALLOWED_VALUES = [
        self::ONE_MONTH_LocalProjectCreateV30AudienceConvertedTimeDuration,
        self::SEVEN_DAY_LocalProjectCreateV30AudienceConvertedTimeDuration,
        self::SIX_MONTH_LocalProjectCreateV30AudienceConvertedTimeDuration,
        self::THREE_MONTH_LocalProjectCreateV30AudienceConvertedTimeDuration,
        self::TODAY_LocalProjectCreateV30AudienceConvertedTimeDuration,
        self::TWELVE_MONTH_LocalProjectCreateV30AudienceConvertedTimeDuration,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectCreateV30AudienceConvertedTimeDuration', $value));
        }
        return (string) $value;
    }
}
