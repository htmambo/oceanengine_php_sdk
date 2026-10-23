<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EventManagerShareGetV30DataListAllAccountType
{
    public const AD_EventManagerShareGetV30DataListAllAccountType = 'AD';

    public const ALLOWED_VALUES = [
        self::AD_EventManagerShareGetV30DataListAllAccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EventManagerShareGetV30DataListAllAccountType', $value));
        }
        return (string) $value;
    }
}
