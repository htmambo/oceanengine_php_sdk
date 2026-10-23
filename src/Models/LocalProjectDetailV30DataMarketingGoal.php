<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectDetailV30DataMarketingGoal
{
    public const LIVE_LocalProjectDetailV30DataMarketingGoal = 'LIVE';
    public const VIDEO_IMAGE_LocalProjectDetailV30DataMarketingGoal = 'VIDEO_IMAGE';

    public const ALLOWED_VALUES = [
        self::LIVE_LocalProjectDetailV30DataMarketingGoal,
        self::VIDEO_IMAGE_LocalProjectDetailV30DataMarketingGoal,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectDetailV30DataMarketingGoal', $value));
        }
        return (string) $value;
    }
}
