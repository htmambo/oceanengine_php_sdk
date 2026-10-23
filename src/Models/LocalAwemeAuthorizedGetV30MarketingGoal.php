<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalAwemeAuthorizedGetV30MarketingGoal
{
    public const LIVE_LocalAwemeAuthorizedGetV30MarketingGoal = 'LIVE';
    public const VIDEO_IMAGE_LocalAwemeAuthorizedGetV30MarketingGoal = 'VIDEO_IMAGE';

    public const ALLOWED_VALUES = [
        self::LIVE_LocalAwemeAuthorizedGetV30MarketingGoal,
        self::VIDEO_IMAGE_LocalAwemeAuthorizedGetV30MarketingGoal,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalAwemeAuthorizedGetV30MarketingGoal', $value));
        }
        return (string) $value;
    }
}
