<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalAudiencePackageGetV30DataAudiencePackagesConvertedTimeDuration
{
    public const ONE_MONTH_LocalAudiencePackageGetV30DataAudiencePackagesConvertedTimeDuration = 'ONE_MONTH';
    public const SEVEN_DAY_LocalAudiencePackageGetV30DataAudiencePackagesConvertedTimeDuration = 'SEVEN_DAY';
    public const SIX_MONTH_LocalAudiencePackageGetV30DataAudiencePackagesConvertedTimeDuration = 'SIX_MONTH';
    public const THREE_MONTH_LocalAudiencePackageGetV30DataAudiencePackagesConvertedTimeDuration = 'THREE_MONTH';
    public const TODAY_LocalAudiencePackageGetV30DataAudiencePackagesConvertedTimeDuration = 'TODAY';
    public const TWELVE_MONTH_LocalAudiencePackageGetV30DataAudiencePackagesConvertedTimeDuration = 'TWELVE_MONTH';

    public const ALLOWED_VALUES = [
        self::ONE_MONTH_LocalAudiencePackageGetV30DataAudiencePackagesConvertedTimeDuration,
        self::SEVEN_DAY_LocalAudiencePackageGetV30DataAudiencePackagesConvertedTimeDuration,
        self::SIX_MONTH_LocalAudiencePackageGetV30DataAudiencePackagesConvertedTimeDuration,
        self::THREE_MONTH_LocalAudiencePackageGetV30DataAudiencePackagesConvertedTimeDuration,
        self::TODAY_LocalAudiencePackageGetV30DataAudiencePackagesConvertedTimeDuration,
        self::TWELVE_MONTH_LocalAudiencePackageGetV30DataAudiencePackagesConvertedTimeDuration,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalAudiencePackageGetV30DataAudiencePackagesConvertedTimeDuration', $value));
        }
        return (string) $value;
    }
}
