<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsBidSuggestV2ScheduleType
{
    public const SCHEDULE_FROM_NOW_ToolsBidSuggestV2ScheduleType = 'SCHEDULE_FROM_NOW';
    public const SCHEDULE_START_END_ToolsBidSuggestV2ScheduleType = 'SCHEDULE_START_END';

    public const ALLOWED_VALUES = [
        self::SCHEDULE_FROM_NOW_ToolsBidSuggestV2ScheduleType,
        self::SCHEDULE_START_END_ToolsBidSuggestV2ScheduleType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsBidSuggestV2ScheduleType', $value));
        }
        return (string) $value;
    }
}
