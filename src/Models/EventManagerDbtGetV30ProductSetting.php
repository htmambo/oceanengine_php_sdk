<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EventManagerDbtGetV30ProductSetting
{
    public const SDPA_EventManagerDbtGetV30ProductSetting = 'SDPA';

    public const ALLOWED_VALUES = [
        self::SDPA_EventManagerDbtGetV30ProductSetting,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EventManagerDbtGetV30ProductSetting', $value));
        }
        return (string) $value;
    }
}
