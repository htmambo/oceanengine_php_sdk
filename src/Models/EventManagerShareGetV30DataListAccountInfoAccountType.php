<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EventManagerShareGetV30DataListAccountInfoAccountType
{
    public const AD_EventManagerShareGetV30DataListAccountInfoAccountType = 'AD';

    public const ALLOWED_VALUES = [
        self::AD_EventManagerShareGetV30DataListAccountInfoAccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EventManagerShareGetV30DataListAccountInfoAccountType', $value));
        }
        return (string) $value;
    }
}
