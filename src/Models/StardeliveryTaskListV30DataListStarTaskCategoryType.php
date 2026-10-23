<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StardeliveryTaskListV30DataListStarTaskCategoryType
{
    public const COMPASS_StardeliveryTaskListV30DataListStarTaskCategoryType = 'COMPASS';
    public const GAME_StardeliveryTaskListV30DataListStarTaskCategoryType = 'GAME';

    public const ALLOWED_VALUES = [
        self::COMPASS_StardeliveryTaskListV30DataListStarTaskCategoryType,
        self::GAME_StardeliveryTaskListV30DataListStarTaskCategoryType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StardeliveryTaskListV30DataListStarTaskCategoryType', $value));
        }
        return (string) $value;
    }
}
