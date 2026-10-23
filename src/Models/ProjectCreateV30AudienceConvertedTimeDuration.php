<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectCreateV30AudienceConvertedTimeDuration
{
    public const NONE_ProjectCreateV30AudienceConvertedTimeDuration = 'NONE';
    public const ONE_MONTH_ProjectCreateV30AudienceConvertedTimeDuration = 'ONE_MONTH';
    public const SEVEN_DAY_ProjectCreateV30AudienceConvertedTimeDuration = 'SEVEN_DAY';
    public const SIX_MONTH_ProjectCreateV30AudienceConvertedTimeDuration = 'SIX_MONTH';
    public const THREE_MONTH_ProjectCreateV30AudienceConvertedTimeDuration = 'THREE_MONTH';
    public const TODAY_ProjectCreateV30AudienceConvertedTimeDuration = 'TODAY';
    public const TWELVE_MONTH_ProjectCreateV30AudienceConvertedTimeDuration = 'TWELVE_MONTH';

    public const ALLOWED_VALUES = [
        self::NONE_ProjectCreateV30AudienceConvertedTimeDuration,
        self::ONE_MONTH_ProjectCreateV30AudienceConvertedTimeDuration,
        self::SEVEN_DAY_ProjectCreateV30AudienceConvertedTimeDuration,
        self::SIX_MONTH_ProjectCreateV30AudienceConvertedTimeDuration,
        self::THREE_MONTH_ProjectCreateV30AudienceConvertedTimeDuration,
        self::TODAY_ProjectCreateV30AudienceConvertedTimeDuration,
        self::TWELVE_MONTH_ProjectCreateV30AudienceConvertedTimeDuration,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectCreateV30AudienceConvertedTimeDuration', $value));
        }
        return (string) $value;
    }
}
