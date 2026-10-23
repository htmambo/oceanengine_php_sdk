<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalAudiencePackageUpdateV30ConvertedTimeDuration
{
    public const ONE_MONTH_LocalAudiencePackageUpdateV30ConvertedTimeDuration = 'ONE_MONTH';
    public const SEVEN_DAY_LocalAudiencePackageUpdateV30ConvertedTimeDuration = 'SEVEN_DAY';
    public const SIX_MONTH_LocalAudiencePackageUpdateV30ConvertedTimeDuration = 'SIX_MONTH';
    public const THREE_MONTH_LocalAudiencePackageUpdateV30ConvertedTimeDuration = 'THREE_MONTH';
    public const TODAY_LocalAudiencePackageUpdateV30ConvertedTimeDuration = 'TODAY';
    public const TWELVE_MONTH_LocalAudiencePackageUpdateV30ConvertedTimeDuration = 'TWELVE_MONTH';

    public const ALLOWED_VALUES = [
        self::ONE_MONTH_LocalAudiencePackageUpdateV30ConvertedTimeDuration,
        self::SEVEN_DAY_LocalAudiencePackageUpdateV30ConvertedTimeDuration,
        self::SIX_MONTH_LocalAudiencePackageUpdateV30ConvertedTimeDuration,
        self::THREE_MONTH_LocalAudiencePackageUpdateV30ConvertedTimeDuration,
        self::TODAY_LocalAudiencePackageUpdateV30ConvertedTimeDuration,
        self::TWELVE_MONTH_LocalAudiencePackageUpdateV30ConvertedTimeDuration,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalAudiencePackageUpdateV30ConvertedTimeDuration', $value));
        }
        return (string) $value;
    }
}
