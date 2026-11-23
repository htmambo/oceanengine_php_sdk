<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageCreateV2MarketingGoal
{
    public const LIVE_AudiencePackageCreateV2MarketingGoal = 'LIVE';
    public const VIDEO_AND_IMAGE_AudiencePackageCreateV2MarketingGoal = 'VIDEO_AND_IMAGE';

    public const ALLOWED_VALUES = [
        self::LIVE_AudiencePackageCreateV2MarketingGoal,
        self::VIDEO_AND_IMAGE_AudiencePackageCreateV2MarketingGoal,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageCreateV2MarketingGoal', $value));
        }
        return (string) $value;
    }
}
