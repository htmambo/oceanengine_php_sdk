<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpStarTaskGetV30DataStarTaskMaterialPurchaseMethod
{
    public const FIXED_PRICE_ToolsEbpStarTaskGetV30DataStarTaskMaterialPurchaseMethod = 'FIXED_PRICE';
    public const PERFORMANCE_BASED_ToolsEbpStarTaskGetV30DataStarTaskMaterialPurchaseMethod = 'PERFORMANCE_BASED';
    public const FIXED_AND_PERFORMANCE_BASED_ToolsEbpStarTaskGetV30DataStarTaskMaterialPurchaseMethod = 'FIXED_AND_PERFORMANCE_BASED';

    public const ALLOWED_VALUES = [
        self::FIXED_PRICE_ToolsEbpStarTaskGetV30DataStarTaskMaterialPurchaseMethod,
        self::PERFORMANCE_BASED_ToolsEbpStarTaskGetV30DataStarTaskMaterialPurchaseMethod,
        self::FIXED_AND_PERFORMANCE_BASED_ToolsEbpStarTaskGetV30DataStarTaskMaterialPurchaseMethod,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpStarTaskGetV30DataStarTaskMaterialPurchaseMethod', $value));
        }
        return (string) $value;
    }
}
