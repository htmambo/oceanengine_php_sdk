<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EventManagerEventConfigsGetV2DataEventConfigsDebuggingStatus
{
    public const INACTIVE_EventManagerEventConfigsGetV2DataEventConfigsDebuggingStatus = 'Inactive';
    public const ACTIVE_EventManagerEventConfigsGetV2DataEventConfigsDebuggingStatus = 'Active';

    public const ALLOWED_VALUES = [
        self::INACTIVE_EventManagerEventConfigsGetV2DataEventConfigsDebuggingStatus,
        self::ACTIVE_EventManagerEventConfigsGetV2DataEventConfigsDebuggingStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EventManagerEventConfigsGetV2DataEventConfigsDebuggingStatus', $value));
        }
        return (string) $value;
    }
}
