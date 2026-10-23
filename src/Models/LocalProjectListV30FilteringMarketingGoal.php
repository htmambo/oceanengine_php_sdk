<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectListV30FilteringMarketingGoal
{
    public const ALL_LocalProjectListV30FilteringMarketingGoal = 'ALL';
    public const LIVE_LocalProjectListV30FilteringMarketingGoal = 'LIVE';
    public const VIDEO_IMAGE_LocalProjectListV30FilteringMarketingGoal = 'VIDEO_IMAGE';

    public const ALLOWED_VALUES = [
        self::ALL_LocalProjectListV30FilteringMarketingGoal,
        self::LIVE_LocalProjectListV30FilteringMarketingGoal,
        self::VIDEO_IMAGE_LocalProjectListV30FilteringMarketingGoal,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectListV30FilteringMarketingGoal', $value));
        }
        return (string) $value;
    }
}
