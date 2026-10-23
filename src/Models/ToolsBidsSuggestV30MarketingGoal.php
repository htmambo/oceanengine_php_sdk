<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsBidsSuggestV30MarketingGoal
{
    public const LIVE_ToolsBidsSuggestV30MarketingGoal = 'LIVE';
    public const VIDEO_AND_IMAGE_ToolsBidsSuggestV30MarketingGoal = 'VIDEO_AND_IMAGE';

    public const ALLOWED_VALUES = [
        self::LIVE_ToolsBidsSuggestV30MarketingGoal,
        self::VIDEO_AND_IMAGE_ToolsBidsSuggestV30MarketingGoal,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsBidsSuggestV30MarketingGoal', $value));
        }
        return (string) $value;
    }
}
