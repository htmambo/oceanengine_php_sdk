<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportStardeliveryTaskVideoDataGetV30DataListStarVideoMaterialAssessment
{
    public const AUDIT_FAIL_MATERIAL_ReportStardeliveryTaskVideoDataGetV30DataListStarVideoMaterialAssessment = 'AUDIT_FAIL_MATERIAL';
    public const CARRY_MATERIAL_ReportStardeliveryTaskVideoDataGetV30DataListStarVideoMaterialAssessment = 'CARRY_MATERIAL';
    public const DELIVERING_MATERIAL_ReportStardeliveryTaskVideoDataGetV30DataListStarVideoMaterialAssessment = 'DELIVERING_MATERIAL';
    public const FIRST_PUBLISH_MATERIAL_ReportStardeliveryTaskVideoDataGetV30DataListStarVideoMaterialAssessment = 'FIRST_PUBLISH_MATERIAL';
    public const HIGH_QUALITY_MATERIAL_ReportStardeliveryTaskVideoDataGetV30DataListStarVideoMaterialAssessment = 'HIGH_QUALITY_MATERIAL';
    public const INEFFICIENT_MATERIAL_ReportStardeliveryTaskVideoDataGetV30DataListStarVideoMaterialAssessment = 'INEFFICIENT_MATERIAL';
    public const LOW_QUALITY_MATERIAL_ReportStardeliveryTaskVideoDataGetV30DataListStarVideoMaterialAssessment = 'LOW_QUALITY_MATERIAL';
    public const SIMILAR_MATERIAL_ReportStardeliveryTaskVideoDataGetV30DataListStarVideoMaterialAssessment = 'SIMILAR_MATERIAL';

    public const ALLOWED_VALUES = [
        self::AUDIT_FAIL_MATERIAL_ReportStardeliveryTaskVideoDataGetV30DataListStarVideoMaterialAssessment,
        self::CARRY_MATERIAL_ReportStardeliveryTaskVideoDataGetV30DataListStarVideoMaterialAssessment,
        self::DELIVERING_MATERIAL_ReportStardeliveryTaskVideoDataGetV30DataListStarVideoMaterialAssessment,
        self::FIRST_PUBLISH_MATERIAL_ReportStardeliveryTaskVideoDataGetV30DataListStarVideoMaterialAssessment,
        self::HIGH_QUALITY_MATERIAL_ReportStardeliveryTaskVideoDataGetV30DataListStarVideoMaterialAssessment,
        self::INEFFICIENT_MATERIAL_ReportStardeliveryTaskVideoDataGetV30DataListStarVideoMaterialAssessment,
        self::LOW_QUALITY_MATERIAL_ReportStardeliveryTaskVideoDataGetV30DataListStarVideoMaterialAssessment,
        self::SIMILAR_MATERIAL_ReportStardeliveryTaskVideoDataGetV30DataListStarVideoMaterialAssessment,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportStardeliveryTaskVideoDataGetV30DataListStarVideoMaterialAssessment', $value));
        }
        return (string) $value;
    }
}
