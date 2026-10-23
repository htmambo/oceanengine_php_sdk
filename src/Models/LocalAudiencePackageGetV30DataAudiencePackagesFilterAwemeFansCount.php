<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalAudiencePackageGetV30DataAudiencePackagesFilterAwemeFansCount
{
    public const FILTER_AWEME_FANS_COUNT_TYPE_OFF_LocalAudiencePackageGetV30DataAudiencePackagesFilterAwemeFansCount = 'FILTER_AWEME_FANS_COUNT_TYPE_OFF';
    public const FILTER_AWEME_FANS_COUNT_TYPE_OVER1000_LocalAudiencePackageGetV30DataAudiencePackagesFilterAwemeFansCount = 'FILTER_AWEME_FANS_COUNT_TYPE_OVER1000';
    public const FILTER_AWEME_FANS_COUNT_TYPE_OVER200_LocalAudiencePackageGetV30DataAudiencePackagesFilterAwemeFansCount = 'FILTER_AWEME_FANS_COUNT_TYPE_OVER200';
    public const FILTER_AWEME_FANS_COUNT_TYPE_OVER500_LocalAudiencePackageGetV30DataAudiencePackagesFilterAwemeFansCount = 'FILTER_AWEME_FANS_COUNT_TYPE_OVER500';

    public const ALLOWED_VALUES = [
        self::FILTER_AWEME_FANS_COUNT_TYPE_OFF_LocalAudiencePackageGetV30DataAudiencePackagesFilterAwemeFansCount,
        self::FILTER_AWEME_FANS_COUNT_TYPE_OVER1000_LocalAudiencePackageGetV30DataAudiencePackagesFilterAwemeFansCount,
        self::FILTER_AWEME_FANS_COUNT_TYPE_OVER200_LocalAudiencePackageGetV30DataAudiencePackagesFilterAwemeFansCount,
        self::FILTER_AWEME_FANS_COUNT_TYPE_OVER500_LocalAudiencePackageGetV30DataAudiencePackagesFilterAwemeFansCount,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalAudiencePackageGetV30DataAudiencePackagesFilterAwemeFansCount', $value));
        }
        return (string) $value;
    }
}
