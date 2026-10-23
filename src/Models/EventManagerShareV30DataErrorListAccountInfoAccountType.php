<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EventManagerShareV30DataErrorListAccountInfoAccountType
{
    public const AD_EventManagerShareV30DataErrorListAccountInfoAccountType = 'AD';

    public const ALLOWED_VALUES = [
        self::AD_EventManagerShareV30DataErrorListAccountInfoAccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EventManagerShareV30DataErrorListAccountInfoAccountType', $value));
        }
        return (string) $value;
    }
}
