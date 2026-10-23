<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanReportMaterialGetV10FilteringAnalysisType
{
    public const FIRST_PUBLISH_QianchuanReportMaterialGetV10FilteringAnalysisType = 'first_publish';
    public const HIGH_QUALITY_QianchuanReportMaterialGetV10FilteringAnalysisType = 'high_quality';
    public const IMPROVABLE_QianchuanReportMaterialGetV10FilteringAnalysisType = 'improvable';
    public const LOW_EFFICIENCY_QianchuanReportMaterialGetV10FilteringAnalysisType = 'low_efficiency';
    public const POOR_QUALITY_QianchuanReportMaterialGetV10FilteringAnalysisType = 'poor_quality';

    public const ALLOWED_VALUES = [
        self::FIRST_PUBLISH_QianchuanReportMaterialGetV10FilteringAnalysisType,
        self::HIGH_QUALITY_QianchuanReportMaterialGetV10FilteringAnalysisType,
        self::IMPROVABLE_QianchuanReportMaterialGetV10FilteringAnalysisType,
        self::LOW_EFFICIENCY_QianchuanReportMaterialGetV10FilteringAnalysisType,
        self::POOR_QUALITY_QianchuanReportMaterialGetV10FilteringAnalysisType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanReportMaterialGetV10FilteringAnalysisType', $value));
        }
        return (string) $value;
    }
}
