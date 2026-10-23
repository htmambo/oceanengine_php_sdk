<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalAudiencePackageGetV30DataAudiencePackagesFilterAwemeAbnormalActive
{
    public const FILTER_AWEME_ABNORMAL_ACTIVE_TYPE_OFF_LocalAudiencePackageGetV30DataAudiencePackagesFilterAwemeAbnormalActive = 'FILTER_AWEME_ABNORMAL_ACTIVE_TYPE_OFF';
    public const FILTER_AWEME_ABNORMAL_ACTIVE_TYPE_ON_LocalAudiencePackageGetV30DataAudiencePackagesFilterAwemeAbnormalActive = 'FILTER_AWEME_ABNORMAL_ACTIVE_TYPE_ON';

    public const ALLOWED_VALUES = [
        self::FILTER_AWEME_ABNORMAL_ACTIVE_TYPE_OFF_LocalAudiencePackageGetV30DataAudiencePackagesFilterAwemeAbnormalActive,
        self::FILTER_AWEME_ABNORMAL_ACTIVE_TYPE_ON_LocalAudiencePackageGetV30DataAudiencePackagesFilterAwemeAbnormalActive,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalAudiencePackageGetV30DataAudiencePackagesFilterAwemeAbnormalActive', $value));
        }
        return (string) $value;
    }
}
