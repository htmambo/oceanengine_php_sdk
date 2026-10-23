<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageGetV30DataAudiencePackagesConvertedTimeDuration
{
    public const NONE_AudiencePackageGetV30DataAudiencePackagesConvertedTimeDuration = 'NONE';
    public const ONE_MONTH_AudiencePackageGetV30DataAudiencePackagesConvertedTimeDuration = 'ONE_MONTH';
    public const SEVEN_DAY_AudiencePackageGetV30DataAudiencePackagesConvertedTimeDuration = 'SEVEN_DAY';
    public const SIX_MONTH_AudiencePackageGetV30DataAudiencePackagesConvertedTimeDuration = 'SIX_MONTH';
    public const THREE_MONTH_AudiencePackageGetV30DataAudiencePackagesConvertedTimeDuration = 'THREE_MONTH';
    public const TODAY_AudiencePackageGetV30DataAudiencePackagesConvertedTimeDuration = 'TODAY';
    public const TWELVE_MONTH_AudiencePackageGetV30DataAudiencePackagesConvertedTimeDuration = 'TWELVE_MONTH';

    public const ALLOWED_VALUES = [
        self::NONE_AudiencePackageGetV30DataAudiencePackagesConvertedTimeDuration,
        self::ONE_MONTH_AudiencePackageGetV30DataAudiencePackagesConvertedTimeDuration,
        self::SEVEN_DAY_AudiencePackageGetV30DataAudiencePackagesConvertedTimeDuration,
        self::SIX_MONTH_AudiencePackageGetV30DataAudiencePackagesConvertedTimeDuration,
        self::THREE_MONTH_AudiencePackageGetV30DataAudiencePackagesConvertedTimeDuration,
        self::TODAY_AudiencePackageGetV30DataAudiencePackagesConvertedTimeDuration,
        self::TWELVE_MONTH_AudiencePackageGetV30DataAudiencePackagesConvertedTimeDuration,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageGetV30DataAudiencePackagesConvertedTimeDuration', $value));
        }
        return (string) $value;
    }
}
