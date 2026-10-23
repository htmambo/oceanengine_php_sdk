<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EventManagerDeepBidTypeGetV30DeliveryMode
{
    public const MANUAL_EventManagerDeepBidTypeGetV30DeliveryMode = 'MANUAL';
    public const PROCEDURAL_EventManagerDeepBidTypeGetV30DeliveryMode = 'PROCEDURAL';

    public const ALLOWED_VALUES = [
        self::MANUAL_EventManagerDeepBidTypeGetV30DeliveryMode,
        self::PROCEDURAL_EventManagerDeepBidTypeGetV30DeliveryMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EventManagerDeepBidTypeGetV30DeliveryMode', $value));
        }
        return (string) $value;
    }
}
