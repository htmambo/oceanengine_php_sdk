<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EventManagerShareCancelV30DataErrorListAllAccountType
{
    public const AD_EventManagerShareCancelV30DataErrorListAllAccountType = 'AD';

    public const ALLOWED_VALUES = [
        self::AD_EventManagerShareCancelV30DataErrorListAllAccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EventManagerShareCancelV30DataErrorListAllAccountType', $value));
        }
        return (string) $value;
    }
}
