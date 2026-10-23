<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class UniProjectListGetV30DataListAudienceConvertedTimeDuration
{
    public const NONE_UniProjectListGetV30DataListAudienceConvertedTimeDuration = 'NONE';
    public const ONE_MONTH_UniProjectListGetV30DataListAudienceConvertedTimeDuration = 'ONE_MONTH';
    public const SEVEN_DAY_UniProjectListGetV30DataListAudienceConvertedTimeDuration = 'SEVEN_DAY';
    public const SIX_MONTH_UniProjectListGetV30DataListAudienceConvertedTimeDuration = 'SIX_MONTH';
    public const THREE_MONTH_UniProjectListGetV30DataListAudienceConvertedTimeDuration = 'THREE_MONTH';
    public const TODAY_UniProjectListGetV30DataListAudienceConvertedTimeDuration = 'TODAY';
    public const TWELVE_MONTH_UniProjectListGetV30DataListAudienceConvertedTimeDuration = 'TWELVE_MONTH';

    public const ALLOWED_VALUES = [
        self::NONE_UniProjectListGetV30DataListAudienceConvertedTimeDuration,
        self::ONE_MONTH_UniProjectListGetV30DataListAudienceConvertedTimeDuration,
        self::SEVEN_DAY_UniProjectListGetV30DataListAudienceConvertedTimeDuration,
        self::SIX_MONTH_UniProjectListGetV30DataListAudienceConvertedTimeDuration,
        self::THREE_MONTH_UniProjectListGetV30DataListAudienceConvertedTimeDuration,
        self::TODAY_UniProjectListGetV30DataListAudienceConvertedTimeDuration,
        self::TWELVE_MONTH_UniProjectListGetV30DataListAudienceConvertedTimeDuration,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum UniProjectListGetV30DataListAudienceConvertedTimeDuration', $value));
        }
        return (string) $value;
    }
}
