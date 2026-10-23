<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalPromotionListV30FilteringMarketingGoal
{
    public const ALL_LocalPromotionListV30FilteringMarketingGoal = 'ALL';
    public const LIVE_LocalPromotionListV30FilteringMarketingGoal = 'LIVE';
    public const VIDEO_IMAGE_LocalPromotionListV30FilteringMarketingGoal = 'VIDEO_IMAGE';

    public const ALLOWED_VALUES = [
        self::ALL_LocalPromotionListV30FilteringMarketingGoal,
        self::LIVE_LocalPromotionListV30FilteringMarketingGoal,
        self::VIDEO_IMAGE_LocalPromotionListV30FilteringMarketingGoal,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalPromotionListV30FilteringMarketingGoal', $value));
        }
        return (string) $value;
    }
}
