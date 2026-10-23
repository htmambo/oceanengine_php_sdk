<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportStardeliveryTaskVideoDataGetV30FilteringStarMaterialPurchaseMethod
{
    public const FIXED_PRICE_ReportStardeliveryTaskVideoDataGetV30FilteringStarMaterialPurchaseMethod = 'FIXED_PRICE';
    public const PERFORMANCE_BASED_ReportStardeliveryTaskVideoDataGetV30FilteringStarMaterialPurchaseMethod = 'PERFORMANCE_BASED';

    public const ALLOWED_VALUES = [
        self::FIXED_PRICE_ReportStardeliveryTaskVideoDataGetV30FilteringStarMaterialPurchaseMethod,
        self::PERFORMANCE_BASED_ReportStardeliveryTaskVideoDataGetV30FilteringStarMaterialPurchaseMethod,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportStardeliveryTaskVideoDataGetV30FilteringStarMaterialPurchaseMethod', $value));
        }
        return (string) $value;
    }
}
