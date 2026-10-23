<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportStardeliveryTaskDataGetV30DataListStarTaskCategoryType
{
    public const COMPASS_ReportStardeliveryTaskDataGetV30DataListStarTaskCategoryType = 'COMPASS';
    public const GAME_ReportStardeliveryTaskDataGetV30DataListStarTaskCategoryType = 'GAME';

    public const ALLOWED_VALUES = [
        self::COMPASS_ReportStardeliveryTaskDataGetV30DataListStarTaskCategoryType,
        self::GAME_ReportStardeliveryTaskDataGetV30DataListStarTaskCategoryType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportStardeliveryTaskDataGetV30DataListStarTaskCategoryType', $value));
        }
        return (string) $value;
    }
}
