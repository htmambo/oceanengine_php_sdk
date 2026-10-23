<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StardeliveryTaskDetailV30DataStarTaskMaterialPurchaseMethod
{
    public const FIXED_PRICE_StardeliveryTaskDetailV30DataStarTaskMaterialPurchaseMethod = 'FIXED_PRICE';
    public const PERFORMANCE_BASED_StardeliveryTaskDetailV30DataStarTaskMaterialPurchaseMethod = 'PERFORMANCE_BASED';
    public const FIXED_AND_PERFORMANCE_BASED_StardeliveryTaskDetailV30DataStarTaskMaterialPurchaseMethod = 'FIXED_AND_PERFORMANCE_BASED';

    public const ALLOWED_VALUES = [
        self::FIXED_PRICE_StardeliveryTaskDetailV30DataStarTaskMaterialPurchaseMethod,
        self::PERFORMANCE_BASED_StardeliveryTaskDetailV30DataStarTaskMaterialPurchaseMethod,
        self::FIXED_AND_PERFORMANCE_BASED_StardeliveryTaskDetailV30DataStarTaskMaterialPurchaseMethod,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StardeliveryTaskDetailV30DataStarTaskMaterialPurchaseMethod', $value));
        }
        return (string) $value;
    }
}
