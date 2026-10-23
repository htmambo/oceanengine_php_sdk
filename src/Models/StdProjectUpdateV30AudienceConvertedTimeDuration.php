<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectUpdateV30AudienceConvertedTimeDuration
{
    public const NONE_StdProjectUpdateV30AudienceConvertedTimeDuration = 'NONE';
    public const ONE_MONTH_StdProjectUpdateV30AudienceConvertedTimeDuration = 'ONE_MONTH';
    public const SEVEN_DAY_StdProjectUpdateV30AudienceConvertedTimeDuration = 'SEVEN_DAY';
    public const SIX_MONTH_StdProjectUpdateV30AudienceConvertedTimeDuration = 'SIX_MONTH';
    public const THREE_MONTH_StdProjectUpdateV30AudienceConvertedTimeDuration = 'THREE_MONTH';
    public const TODAY_StdProjectUpdateV30AudienceConvertedTimeDuration = 'TODAY';
    public const TWELVE_MONTH_StdProjectUpdateV30AudienceConvertedTimeDuration = 'TWELVE_MONTH';

    public const ALLOWED_VALUES = [
        self::NONE_StdProjectUpdateV30AudienceConvertedTimeDuration,
        self::ONE_MONTH_StdProjectUpdateV30AudienceConvertedTimeDuration,
        self::SEVEN_DAY_StdProjectUpdateV30AudienceConvertedTimeDuration,
        self::SIX_MONTH_StdProjectUpdateV30AudienceConvertedTimeDuration,
        self::THREE_MONTH_StdProjectUpdateV30AudienceConvertedTimeDuration,
        self::TODAY_StdProjectUpdateV30AudienceConvertedTimeDuration,
        self::TWELVE_MONTH_StdProjectUpdateV30AudienceConvertedTimeDuration,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectUpdateV30AudienceConvertedTimeDuration', $value));
        }
        return (string) $value;
    }
}
