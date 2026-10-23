<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanMaterialGetV10FilteringAnalysisType
{
    public const CARRY_MATERIAL_QianchuanMaterialGetV10FilteringAnalysisType = 'CARRY_MATERIAL';
    public const FIRST_PUBLISH_MATERIAL_QianchuanMaterialGetV10FilteringAnalysisType = 'FIRST_PUBLISH_MATERIAL';
    public const HIGH_QUALITY_MATERIAL_QianchuanMaterialGetV10FilteringAnalysisType = 'HIGH_QUALITY_MATERIAL';
    public const LOW_EFFICIENCY_MATERIAL_QianchuanMaterialGetV10FilteringAnalysisType = 'LOW_EFFICIENCY_MATERIAL';
    public const POOR_QUALITY_MATERIAL_QianchuanMaterialGetV10FilteringAnalysisType = 'POOR_QUALITY_MATERIAL';
    public const SIMILAR_RISK_MATERIAL_QianchuanMaterialGetV10FilteringAnalysisType = 'SIMILAR_RISK_MATERIAL';

    public const ALLOWED_VALUES = [
        self::CARRY_MATERIAL_QianchuanMaterialGetV10FilteringAnalysisType,
        self::FIRST_PUBLISH_MATERIAL_QianchuanMaterialGetV10FilteringAnalysisType,
        self::HIGH_QUALITY_MATERIAL_QianchuanMaterialGetV10FilteringAnalysisType,
        self::LOW_EFFICIENCY_MATERIAL_QianchuanMaterialGetV10FilteringAnalysisType,
        self::POOR_QUALITY_MATERIAL_QianchuanMaterialGetV10FilteringAnalysisType,
        self::SIMILAR_RISK_MATERIAL_QianchuanMaterialGetV10FilteringAnalysisType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanMaterialGetV10FilteringAnalysisType', $value));
        }
        return (string) $value;
    }
}
