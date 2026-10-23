<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectCreateV30MarketingGoal
{
    public const LIVE_StdProjectCreateV30MarketingGoal = 'LIVE';
    public const VIDEO_AND_IMAGE_StdProjectCreateV30MarketingGoal = 'VIDEO_AND_IMAGE';

    public const ALLOWED_VALUES = [
        self::LIVE_StdProjectCreateV30MarketingGoal,
        self::VIDEO_AND_IMAGE_StdProjectCreateV30MarketingGoal,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectCreateV30MarketingGoal', $value));
        }
        return (string) $value;
    }
}
