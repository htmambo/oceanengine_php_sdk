<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpStarTaskTaskAuthorVedioGetV30FilteringExcludeMaterialAssessment
{
    public const AUDIT_FAIL_MATERIAL_ToolsEbpStarTaskTaskAuthorVedioGetV30FilteringExcludeMaterialAssessment = 'AUDIT_FAIL_MATERIAL';
    public const DELIVERING_MATERIAL_ToolsEbpStarTaskTaskAuthorVedioGetV30FilteringExcludeMaterialAssessment = 'DELIVERING_MATERIAL';
    public const LOW_QUALITY_MATERIAL_ToolsEbpStarTaskTaskAuthorVedioGetV30FilteringExcludeMaterialAssessment = 'LOW_QUALITY_MATERIAL';
    public const CARRY_MATERIAL_ToolsEbpStarTaskTaskAuthorVedioGetV30FilteringExcludeMaterialAssessment = 'CARRY_MATERIAL';
    public const SIMILAR_MATERIAL_ToolsEbpStarTaskTaskAuthorVedioGetV30FilteringExcludeMaterialAssessment = 'SIMILAR_MATERIAL';
    public const INEFFICIENT_MATERIAL_ToolsEbpStarTaskTaskAuthorVedioGetV30FilteringExcludeMaterialAssessment = 'INEFFICIENT_MATERIAL';

    public const ALLOWED_VALUES = [
        self::AUDIT_FAIL_MATERIAL_ToolsEbpStarTaskTaskAuthorVedioGetV30FilteringExcludeMaterialAssessment,
        self::DELIVERING_MATERIAL_ToolsEbpStarTaskTaskAuthorVedioGetV30FilteringExcludeMaterialAssessment,
        self::LOW_QUALITY_MATERIAL_ToolsEbpStarTaskTaskAuthorVedioGetV30FilteringExcludeMaterialAssessment,
        self::CARRY_MATERIAL_ToolsEbpStarTaskTaskAuthorVedioGetV30FilteringExcludeMaterialAssessment,
        self::SIMILAR_MATERIAL_ToolsEbpStarTaskTaskAuthorVedioGetV30FilteringExcludeMaterialAssessment,
        self::INEFFICIENT_MATERIAL_ToolsEbpStarTaskTaskAuthorVedioGetV30FilteringExcludeMaterialAssessment,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpStarTaskTaskAuthorVedioGetV30FilteringExcludeMaterialAssessment', $value));
        }
        return (string) $value;
    }
}
