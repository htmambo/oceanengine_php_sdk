<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectCreateV30AudienceConvertedTimeDuration
{
    public const NONE_StdProjectCreateV30AudienceConvertedTimeDuration = 'NONE';
    public const ONE_MONTH_StdProjectCreateV30AudienceConvertedTimeDuration = 'ONE_MONTH';
    public const SEVEN_DAY_StdProjectCreateV30AudienceConvertedTimeDuration = 'SEVEN_DAY';
    public const SIX_MONTH_StdProjectCreateV30AudienceConvertedTimeDuration = 'SIX_MONTH';
    public const THREE_MONTH_StdProjectCreateV30AudienceConvertedTimeDuration = 'THREE_MONTH';
    public const TODAY_StdProjectCreateV30AudienceConvertedTimeDuration = 'TODAY';
    public const TWELVE_MONTH_StdProjectCreateV30AudienceConvertedTimeDuration = 'TWELVE_MONTH';

    public const ALLOWED_VALUES = [
        self::NONE_StdProjectCreateV30AudienceConvertedTimeDuration,
        self::ONE_MONTH_StdProjectCreateV30AudienceConvertedTimeDuration,
        self::SEVEN_DAY_StdProjectCreateV30AudienceConvertedTimeDuration,
        self::SIX_MONTH_StdProjectCreateV30AudienceConvertedTimeDuration,
        self::THREE_MONTH_StdProjectCreateV30AudienceConvertedTimeDuration,
        self::TODAY_StdProjectCreateV30AudienceConvertedTimeDuration,
        self::TWELVE_MONTH_StdProjectCreateV30AudienceConvertedTimeDuration,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectCreateV30AudienceConvertedTimeDuration', $value));
        }
        return (string) $value;
    }
}
