<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalReportProjectGetV30FilteringMarketingGoal
{
    public const LIVE_LocalReportProjectGetV30FilteringMarketingGoal = 'LIVE';
    public const VIDEO_IMAGE_LocalReportProjectGetV30FilteringMarketingGoal = 'VIDEO_IMAGE';

    public const ALLOWED_VALUES = [
        self::LIVE_LocalReportProjectGetV30FilteringMarketingGoal,
        self::VIDEO_IMAGE_LocalReportProjectGetV30FilteringMarketingGoal,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalReportProjectGetV30FilteringMarketingGoal', $value));
        }
        return (string) $value;
    }
}
