<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class UniProjectCreateV30AudienceConvertedTimeDuration
{
    public const NONE_UniProjectCreateV30AudienceConvertedTimeDuration = 'NONE';
    public const ONE_MONTH_UniProjectCreateV30AudienceConvertedTimeDuration = 'ONE_MONTH';
    public const SEVEN_DAY_UniProjectCreateV30AudienceConvertedTimeDuration = 'SEVEN_DAY';
    public const SIX_MONTH_UniProjectCreateV30AudienceConvertedTimeDuration = 'SIX_MONTH';
    public const THREE_MONTH_UniProjectCreateV30AudienceConvertedTimeDuration = 'THREE_MONTH';
    public const TODAY_UniProjectCreateV30AudienceConvertedTimeDuration = 'TODAY';
    public const TWELVE_MONTH_UniProjectCreateV30AudienceConvertedTimeDuration = 'TWELVE_MONTH';

    public const ALLOWED_VALUES = [
        self::NONE_UniProjectCreateV30AudienceConvertedTimeDuration,
        self::ONE_MONTH_UniProjectCreateV30AudienceConvertedTimeDuration,
        self::SEVEN_DAY_UniProjectCreateV30AudienceConvertedTimeDuration,
        self::SIX_MONTH_UniProjectCreateV30AudienceConvertedTimeDuration,
        self::THREE_MONTH_UniProjectCreateV30AudienceConvertedTimeDuration,
        self::TODAY_UniProjectCreateV30AudienceConvertedTimeDuration,
        self::TWELVE_MONTH_UniProjectCreateV30AudienceConvertedTimeDuration,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum UniProjectCreateV30AudienceConvertedTimeDuration', $value));
        }
        return (string) $value;
    }
}
