<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StardeliveryTaskListV30FilteringStarTaskCategoryType
{
    public const COMPASS_StardeliveryTaskListV30FilteringStarTaskCategoryType = 'COMPASS';
    public const GAME_StardeliveryTaskListV30FilteringStarTaskCategoryType = 'GAME';

    public const ALLOWED_VALUES = [
        self::COMPASS_StardeliveryTaskListV30FilteringStarTaskCategoryType,
        self::GAME_StardeliveryTaskListV30FilteringStarTaskCategoryType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StardeliveryTaskListV30FilteringStarTaskCategoryType', $value));
        }
        return (string) $value;
    }
}
