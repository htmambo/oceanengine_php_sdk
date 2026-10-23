<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DiagnosisTaskAgentListV2Results
{
    public const AD_HIGH_QUALITY_MATERIAL_DiagnosisTaskAgentListV2Results = 'AD_HIGH_QUALITY_MATERIAL';
    public const ECP_HIGH_QUALITY_MATERIAL_DiagnosisTaskAgentListV2Results = 'ECP_HIGH_QUALITY_MATERIAL';
    public const FIRST_PUBLISH_MATERIAL_DiagnosisTaskAgentListV2Results = 'FIRST_PUBLISH_MATERIAL';
    public const INEFFICIENT_MATERIAL_DiagnosisTaskAgentListV2Results = 'INEFFICIENT_MATERIAL';
    public const LOCAL_HIGH_QUALITY_MATERIAL_DiagnosisTaskAgentListV2Results = 'LOCAL_HIGH_QUALITY_MATERIAL';
    public const NON_AD_HIGH_QUALITY_MATERIAL_DiagnosisTaskAgentListV2Results = 'NON_AD_HIGH_QUALITY_MATERIAL';
    public const NON_ECP_HIGH_QUALITY_MATERIAL_DiagnosisTaskAgentListV2Results = 'NON_ECP_HIGH_QUALITY_MATERIAL';
    public const NON_FIRST_PUBLISH_MATERIAL_DiagnosisTaskAgentListV2Results = 'NON_FIRST_PUBLISH_MATERIAL';
    public const NON_INEFFICIENT_MATERIAL_DiagnosisTaskAgentListV2Results = 'NON_INEFFICIENT_MATERIAL';
    public const NON_LOCAL_HIGH_QUALITY_MATERIAL_DiagnosisTaskAgentListV2Results = 'NON_LOCAL_HIGH_QUALITY_MATERIAL';

    public const ALLOWED_VALUES = [
        self::AD_HIGH_QUALITY_MATERIAL_DiagnosisTaskAgentListV2Results,
        self::ECP_HIGH_QUALITY_MATERIAL_DiagnosisTaskAgentListV2Results,
        self::FIRST_PUBLISH_MATERIAL_DiagnosisTaskAgentListV2Results,
        self::INEFFICIENT_MATERIAL_DiagnosisTaskAgentListV2Results,
        self::LOCAL_HIGH_QUALITY_MATERIAL_DiagnosisTaskAgentListV2Results,
        self::NON_AD_HIGH_QUALITY_MATERIAL_DiagnosisTaskAgentListV2Results,
        self::NON_ECP_HIGH_QUALITY_MATERIAL_DiagnosisTaskAgentListV2Results,
        self::NON_FIRST_PUBLISH_MATERIAL_DiagnosisTaskAgentListV2Results,
        self::NON_INEFFICIENT_MATERIAL_DiagnosisTaskAgentListV2Results,
        self::NON_LOCAL_HIGH_QUALITY_MATERIAL_DiagnosisTaskAgentListV2Results,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DiagnosisTaskAgentListV2Results', $value));
        }
        return (string) $value;
    }
}
