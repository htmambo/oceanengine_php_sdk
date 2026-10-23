<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionBlockMaterialGetV10FilteringAnalysisType
{
    public const FIRST_PUBLISH_MATERIAL_QianchuanUniPromotionBlockMaterialGetV10FilteringAnalysisType = 'FIRST_PUBLISH_MATERIAL';
    public const HIGH_QUALITY_MATERIAL_QianchuanUniPromotionBlockMaterialGetV10FilteringAnalysisType = 'HIGH_QUALITY_MATERIAL';
    public const LOW_QUALITY_MATERIAL_QianchuanUniPromotionBlockMaterialGetV10FilteringAnalysisType = 'LOW_QUALITY_MATERIAL';
    public const INEFFICIENT_MATERIAL_QianchuanUniPromotionBlockMaterialGetV10FilteringAnalysisType = 'INEFFICIENT_MATERIAL';
    public const CARRY_MATERIAL_QianchuanUniPromotionBlockMaterialGetV10FilteringAnalysisType = 'CARRY_MATERIAL';
    public const SIMILAR_MATERIAL_QianchuanUniPromotionBlockMaterialGetV10FilteringAnalysisType = 'SIMILAR_MATERIAL';

    public const ALLOWED_VALUES = [
        self::FIRST_PUBLISH_MATERIAL_QianchuanUniPromotionBlockMaterialGetV10FilteringAnalysisType,
        self::HIGH_QUALITY_MATERIAL_QianchuanUniPromotionBlockMaterialGetV10FilteringAnalysisType,
        self::LOW_QUALITY_MATERIAL_QianchuanUniPromotionBlockMaterialGetV10FilteringAnalysisType,
        self::INEFFICIENT_MATERIAL_QianchuanUniPromotionBlockMaterialGetV10FilteringAnalysisType,
        self::CARRY_MATERIAL_QianchuanUniPromotionBlockMaterialGetV10FilteringAnalysisType,
        self::SIMILAR_MATERIAL_QianchuanUniPromotionBlockMaterialGetV10FilteringAnalysisType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionBlockMaterialGetV10FilteringAnalysisType', $value));
        }
        return (string) $value;
    }
}
