<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectWeekScheduleUpdateV30DataScheduleScene
{
    public const NEXT_DAY_ProjectWeekScheduleUpdateV30DataScheduleScene = 'NEXT_DAY';
    public const REALTIME_ProjectWeekScheduleUpdateV30DataScheduleScene = 'REALTIME';

    public const ALLOWED_VALUES = [
        self::NEXT_DAY_ProjectWeekScheduleUpdateV30DataScheduleScene,
        self::REALTIME_ProjectWeekScheduleUpdateV30DataScheduleScene,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectWeekScheduleUpdateV30DataScheduleScene', $value));
        }
        return (string) $value;
    }
}
