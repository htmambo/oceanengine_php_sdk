<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportStardeliveryTaskVideoDataGetV30DataListStarMaterialType
{
    public const FIXED_PRICE_MATERIAL_ReportStardeliveryTaskVideoDataGetV30DataListStarMaterialType = 'FIXED_PRICE_MATERIAL';
    public const HIGH_POTENTIAL_MATERIAL_ReportStardeliveryTaskVideoDataGetV30DataListStarMaterialType = 'HIGH_POTENTIAL_MATERIAL';
    public const PERFORMANCE_BASED_MATERIAL_ReportStardeliveryTaskVideoDataGetV30DataListStarMaterialType = 'PERFORMANCE_BASED_MATERIAL';

    public const ALLOWED_VALUES = [
        self::FIXED_PRICE_MATERIAL_ReportStardeliveryTaskVideoDataGetV30DataListStarMaterialType,
        self::HIGH_POTENTIAL_MATERIAL_ReportStardeliveryTaskVideoDataGetV30DataListStarMaterialType,
        self::PERFORMANCE_BASED_MATERIAL_ReportStardeliveryTaskVideoDataGetV30DataListStarMaterialType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportStardeliveryTaskVideoDataGetV30DataListStarMaterialType', $value));
        }
        return (string) $value;
    }
}
