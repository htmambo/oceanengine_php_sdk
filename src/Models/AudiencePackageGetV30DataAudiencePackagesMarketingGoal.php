<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageGetV30DataAudiencePackagesMarketingGoal
{
    public const LIVE_AudiencePackageGetV30DataAudiencePackagesMarketingGoal = 'LIVE';
    public const VIDEO_AND_IMAGE_AudiencePackageGetV30DataAudiencePackagesMarketingGoal = 'VIDEO_AND_IMAGE';

    public const ALLOWED_VALUES = [
        self::LIVE_AudiencePackageGetV30DataAudiencePackagesMarketingGoal,
        self::VIDEO_AND_IMAGE_AudiencePackageGetV30DataAudiencePackagesMarketingGoal,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageGetV30DataAudiencePackagesMarketingGoal', $value));
        }
        return (string) $value;
    }
}
