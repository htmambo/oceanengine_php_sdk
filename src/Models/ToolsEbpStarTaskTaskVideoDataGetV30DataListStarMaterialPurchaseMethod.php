<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpStarTaskTaskVideoDataGetV30DataListStarMaterialPurchaseMethod
{
    public const FIXED_PRICE_ToolsEbpStarTaskTaskVideoDataGetV30DataListStarMaterialPurchaseMethod = 'FIXED_PRICE';
    public const PERFORMANCE_BASED_ToolsEbpStarTaskTaskVideoDataGetV30DataListStarMaterialPurchaseMethod = 'PERFORMANCE_BASED';

    public const ALLOWED_VALUES = [
        self::FIXED_PRICE_ToolsEbpStarTaskTaskVideoDataGetV30DataListStarMaterialPurchaseMethod,
        self::PERFORMANCE_BASED_ToolsEbpStarTaskTaskVideoDataGetV30DataListStarMaterialPurchaseMethod,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpStarTaskTaskVideoDataGetV30DataListStarMaterialPurchaseMethod', $value));
        }
        return (string) $value;
    }
}
