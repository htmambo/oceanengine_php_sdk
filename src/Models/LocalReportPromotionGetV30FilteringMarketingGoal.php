<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalReportPromotionGetV30FilteringMarketingGoal
{
    public const LIVE_LocalReportPromotionGetV30FilteringMarketingGoal = 'LIVE';
    public const VIDEO_IMAGE_LocalReportPromotionGetV30FilteringMarketingGoal = 'VIDEO_IMAGE';

    public const ALLOWED_VALUES = [
        self::LIVE_LocalReportPromotionGetV30FilteringMarketingGoal,
        self::VIDEO_IMAGE_LocalReportPromotionGetV30FilteringMarketingGoal,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalReportPromotionGetV30FilteringMarketingGoal', $value));
        }
        return (string) $value;
    }
}
