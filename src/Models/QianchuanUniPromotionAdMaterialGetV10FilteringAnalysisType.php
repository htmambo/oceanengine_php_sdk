<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionAdMaterialGetV10FilteringAnalysisType
{
    public const FIRST_PUBLISH_MATERIAL_QianchuanUniPromotionAdMaterialGetV10FilteringAnalysisType = 'FIRST_PUBLISH_MATERIAL';
    public const HIGH_QUALITY_MATERIAL_QianchuanUniPromotionAdMaterialGetV10FilteringAnalysisType = 'HIGH_QUALITY_MATERIAL';
    public const LOW_QUALITY_MATERIAL_QianchuanUniPromotionAdMaterialGetV10FilteringAnalysisType = 'LOW_QUALITY_MATERIAL';
    public const INEFFICIENT_MATERIAL_QianchuanUniPromotionAdMaterialGetV10FilteringAnalysisType = 'INEFFICIENT_MATERIAL';
    public const CARRY_MATERIAL_QianchuanUniPromotionAdMaterialGetV10FilteringAnalysisType = 'CARRY_MATERIAL';
    public const SIMILAR_MATERIAL_QianchuanUniPromotionAdMaterialGetV10FilteringAnalysisType = 'SIMILAR_MATERIAL';

    public const ALLOWED_VALUES = [
        self::FIRST_PUBLISH_MATERIAL_QianchuanUniPromotionAdMaterialGetV10FilteringAnalysisType,
        self::HIGH_QUALITY_MATERIAL_QianchuanUniPromotionAdMaterialGetV10FilteringAnalysisType,
        self::LOW_QUALITY_MATERIAL_QianchuanUniPromotionAdMaterialGetV10FilteringAnalysisType,
        self::INEFFICIENT_MATERIAL_QianchuanUniPromotionAdMaterialGetV10FilteringAnalysisType,
        self::CARRY_MATERIAL_QianchuanUniPromotionAdMaterialGetV10FilteringAnalysisType,
        self::SIMILAR_MATERIAL_QianchuanUniPromotionAdMaterialGetV10FilteringAnalysisType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionAdMaterialGetV10FilteringAnalysisType', $value));
        }
        return (string) $value;
    }
}
