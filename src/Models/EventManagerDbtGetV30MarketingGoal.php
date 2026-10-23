<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EventManagerDbtGetV30MarketingGoal
{
    public const LIVE_EventManagerDbtGetV30MarketingGoal = 'LIVE';
    public const VIDEO_AND_IMAGE_EventManagerDbtGetV30MarketingGoal = 'VIDEO_AND_IMAGE';

    public const ALLOWED_VALUES = [
        self::LIVE_EventManagerDbtGetV30MarketingGoal,
        self::VIDEO_AND_IMAGE_EventManagerDbtGetV30MarketingGoal,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EventManagerDbtGetV30MarketingGoal', $value));
        }
        return (string) $value;
    }
}
