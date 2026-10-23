<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectListV30DataListMarketingGoal
{
    public const LIVE_StdProjectListV30DataListMarketingGoal = 'LIVE';
    public const VIDEO_AND_IMAGE_StdProjectListV30DataListMarketingGoal = 'VIDEO_AND_IMAGE';

    public const ALLOWED_VALUES = [
        self::LIVE_StdProjectListV30DataListMarketingGoal,
        self::VIDEO_AND_IMAGE_StdProjectListV30DataListMarketingGoal,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectListV30DataListMarketingGoal', $value));
        }
        return (string) $value;
    }
}
