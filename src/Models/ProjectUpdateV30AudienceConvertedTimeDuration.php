<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectUpdateV30AudienceConvertedTimeDuration
{
    public const NONE_ProjectUpdateV30AudienceConvertedTimeDuration = 'NONE';
    public const ONE_MONTH_ProjectUpdateV30AudienceConvertedTimeDuration = 'ONE_MONTH';
    public const SEVEN_DAY_ProjectUpdateV30AudienceConvertedTimeDuration = 'SEVEN_DAY';
    public const SIX_MONTH_ProjectUpdateV30AudienceConvertedTimeDuration = 'SIX_MONTH';
    public const THREE_MONTH_ProjectUpdateV30AudienceConvertedTimeDuration = 'THREE_MONTH';
    public const TODAY_ProjectUpdateV30AudienceConvertedTimeDuration = 'TODAY';
    public const TWELVE_MONTH_ProjectUpdateV30AudienceConvertedTimeDuration = 'TWELVE_MONTH';

    public const ALLOWED_VALUES = [
        self::NONE_ProjectUpdateV30AudienceConvertedTimeDuration,
        self::ONE_MONTH_ProjectUpdateV30AudienceConvertedTimeDuration,
        self::SEVEN_DAY_ProjectUpdateV30AudienceConvertedTimeDuration,
        self::SIX_MONTH_ProjectUpdateV30AudienceConvertedTimeDuration,
        self::THREE_MONTH_ProjectUpdateV30AudienceConvertedTimeDuration,
        self::TODAY_ProjectUpdateV30AudienceConvertedTimeDuration,
        self::TWELVE_MONTH_ProjectUpdateV30AudienceConvertedTimeDuration,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectUpdateV30AudienceConvertedTimeDuration', $value));
        }
        return (string) $value;
    }
}
