<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StardeliveryTaskDetailV30DataStarTaskMaterialsRequirementsSpecifiedIsv
{
    public const YES_StardeliveryTaskDetailV30DataStarTaskMaterialsRequirementsSpecifiedIsv = 'YES';
    public const NO_StardeliveryTaskDetailV30DataStarTaskMaterialsRequirementsSpecifiedIsv = 'NO';

    public const ALLOWED_VALUES = [
        self::YES_StardeliveryTaskDetailV30DataStarTaskMaterialsRequirementsSpecifiedIsv,
        self::NO_StardeliveryTaskDetailV30DataStarTaskMaterialsRequirementsSpecifiedIsv,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StardeliveryTaskDetailV30DataStarTaskMaterialsRequirementsSpecifiedIsv', $value));
        }
        return (string) $value;
    }
}
