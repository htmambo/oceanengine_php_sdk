<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportStardeliveryTaskDataGetV30FilteringStarTaskCategoryType
{
    public const COMPASS_ReportStardeliveryTaskDataGetV30FilteringStarTaskCategoryType = 'COMPASS';
    public const GAME_ReportStardeliveryTaskDataGetV30FilteringStarTaskCategoryType = 'GAME';

    public const ALLOWED_VALUES = [
        self::COMPASS_ReportStardeliveryTaskDataGetV30FilteringStarTaskCategoryType,
        self::GAME_ReportStardeliveryTaskDataGetV30FilteringStarTaskCategoryType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportStardeliveryTaskDataGetV30FilteringStarTaskCategoryType', $value));
        }
        return (string) $value;
    }
}
