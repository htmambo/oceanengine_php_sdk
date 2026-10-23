<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EventManagerDeepBidTypeGetV30AdType
{
    public const ALL_EventManagerDeepBidTypeGetV30AdType = 'ALL';
    public const SEARCH_EventManagerDeepBidTypeGetV30AdType = 'SEARCH';

    public const ALLOWED_VALUES = [
        self::ALL_EventManagerDeepBidTypeGetV30AdType,
        self::SEARCH_EventManagerDeepBidTypeGetV30AdType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EventManagerDeepBidTypeGetV30AdType', $value));
        }
        return (string) $value;
    }
}
