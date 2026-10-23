<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DiagnosisTaskAgentListV2DataTaskListIsLocalHighQualityMaterial
{
    public const NO_DiagnosisTaskAgentListV2DataTaskListIsLocalHighQualityMaterial = 'NO';
    public const UNKNOWN_DiagnosisTaskAgentListV2DataTaskListIsLocalHighQualityMaterial = 'UNKNOWN';
    public const YES_DiagnosisTaskAgentListV2DataTaskListIsLocalHighQualityMaterial = 'YES';

    public const ALLOWED_VALUES = [
        self::NO_DiagnosisTaskAgentListV2DataTaskListIsLocalHighQualityMaterial,
        self::UNKNOWN_DiagnosisTaskAgentListV2DataTaskListIsLocalHighQualityMaterial,
        self::YES_DiagnosisTaskAgentListV2DataTaskListIsLocalHighQualityMaterial,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DiagnosisTaskAgentListV2DataTaskListIsLocalHighQualityMaterial', $value));
        }
        return (string) $value;
    }
}
