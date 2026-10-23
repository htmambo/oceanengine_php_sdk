<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectListV30FilteringMarketingGoal
{
    public const LIVE_StdProjectListV30FilteringMarketingGoal = 'LIVE';
    public const VIDEO_AND_IMAGE_StdProjectListV30FilteringMarketingGoal = 'VIDEO_AND_IMAGE';

    public const ALLOWED_VALUES = [
        self::LIVE_StdProjectListV30FilteringMarketingGoal,
        self::VIDEO_AND_IMAGE_StdProjectListV30FilteringMarketingGoal,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectListV30FilteringMarketingGoal', $value));
        }
        return (string) $value;
    }
}
