<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalOcProjectListV30DataProjectListMarketingGoal
{
    public const ALL_LocalOcProjectListV30DataProjectListMarketingGoal = 'ALL';
    public const LIVE_LocalOcProjectListV30DataProjectListMarketingGoal = 'LIVE';
    public const VIDEO_IMAGE_LocalOcProjectListV30DataProjectListMarketingGoal = 'VIDEO_IMAGE';

    public const ALLOWED_VALUES = [
        self::ALL_LocalOcProjectListV30DataProjectListMarketingGoal,
        self::LIVE_LocalOcProjectListV30DataProjectListMarketingGoal,
        self::VIDEO_IMAGE_LocalOcProjectListV30DataProjectListMarketingGoal,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalOcProjectListV30DataProjectListMarketingGoal', $value));
        }
        return (string) $value;
    }
}
