<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DiagnosisTaskAgentGetV2DataTaskListIsEcpHighQualityMaterial
{
    public const NO_DiagnosisTaskAgentGetV2DataTaskListIsEcpHighQualityMaterial = 'NO';
    public const UNKNOWN_DiagnosisTaskAgentGetV2DataTaskListIsEcpHighQualityMaterial = 'UNKNOWN';
    public const YES_DiagnosisTaskAgentGetV2DataTaskListIsEcpHighQualityMaterial = 'YES';

    public const ALLOWED_VALUES = [
        self::NO_DiagnosisTaskAgentGetV2DataTaskListIsEcpHighQualityMaterial,
        self::UNKNOWN_DiagnosisTaskAgentGetV2DataTaskListIsEcpHighQualityMaterial,
        self::YES_DiagnosisTaskAgentGetV2DataTaskListIsEcpHighQualityMaterial,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DiagnosisTaskAgentGetV2DataTaskListIsEcpHighQualityMaterial', $value));
        }
        return (string) $value;
    }
}
