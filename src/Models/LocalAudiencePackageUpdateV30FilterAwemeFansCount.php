<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalAudiencePackageUpdateV30FilterAwemeFansCount
{
    public const FILTER_AWEME_FANS_COUNT_TYPE_OFF_LocalAudiencePackageUpdateV30FilterAwemeFansCount = 'FILTER_AWEME_FANS_COUNT_TYPE_OFF';
    public const FILTER_AWEME_FANS_COUNT_TYPE_OVER1000_LocalAudiencePackageUpdateV30FilterAwemeFansCount = 'FILTER_AWEME_FANS_COUNT_TYPE_OVER1000';
    public const FILTER_AWEME_FANS_COUNT_TYPE_OVER200_LocalAudiencePackageUpdateV30FilterAwemeFansCount = 'FILTER_AWEME_FANS_COUNT_TYPE_OVER200';
    public const FILTER_AWEME_FANS_COUNT_TYPE_OVER500_LocalAudiencePackageUpdateV30FilterAwemeFansCount = 'FILTER_AWEME_FANS_COUNT_TYPE_OVER500';

    public const ALLOWED_VALUES = [
        self::FILTER_AWEME_FANS_COUNT_TYPE_OFF_LocalAudiencePackageUpdateV30FilterAwemeFansCount,
        self::FILTER_AWEME_FANS_COUNT_TYPE_OVER1000_LocalAudiencePackageUpdateV30FilterAwemeFansCount,
        self::FILTER_AWEME_FANS_COUNT_TYPE_OVER200_LocalAudiencePackageUpdateV30FilterAwemeFansCount,
        self::FILTER_AWEME_FANS_COUNT_TYPE_OVER500_LocalAudiencePackageUpdateV30FilterAwemeFansCount,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalAudiencePackageUpdateV30FilterAwemeFansCount', $value));
        }
        return (string) $value;
    }
}
