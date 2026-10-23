<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectListV30DataProjectListMarketingGoal
{
    public const LIVE_LocalProjectListV30DataProjectListMarketingGoal = 'LIVE';
    public const VIDEO_IMAGE_LocalProjectListV30DataProjectListMarketingGoal = 'VIDEO_IMAGE';

    public const ALLOWED_VALUES = [
        self::LIVE_LocalProjectListV30DataProjectListMarketingGoal,
        self::VIDEO_IMAGE_LocalProjectListV30DataProjectListMarketingGoal,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectListV30DataProjectListMarketingGoal', $value));
        }
        return (string) $value;
    }
}
