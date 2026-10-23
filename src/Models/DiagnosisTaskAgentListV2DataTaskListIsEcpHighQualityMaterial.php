<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DiagnosisTaskAgentListV2DataTaskListIsEcpHighQualityMaterial
{
    public const NO_DiagnosisTaskAgentListV2DataTaskListIsEcpHighQualityMaterial = 'NO';
    public const UNKNOWN_DiagnosisTaskAgentListV2DataTaskListIsEcpHighQualityMaterial = 'UNKNOWN';
    public const YES_DiagnosisTaskAgentListV2DataTaskListIsEcpHighQualityMaterial = 'YES';

    public const ALLOWED_VALUES = [
        self::NO_DiagnosisTaskAgentListV2DataTaskListIsEcpHighQualityMaterial,
        self::UNKNOWN_DiagnosisTaskAgentListV2DataTaskListIsEcpHighQualityMaterial,
        self::YES_DiagnosisTaskAgentListV2DataTaskListIsEcpHighQualityMaterial,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DiagnosisTaskAgentListV2DataTaskListIsEcpHighQualityMaterial', $value));
        }
        return (string) $value;
    }
}
