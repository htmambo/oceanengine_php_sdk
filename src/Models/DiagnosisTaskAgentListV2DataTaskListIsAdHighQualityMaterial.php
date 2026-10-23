<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DiagnosisTaskAgentListV2DataTaskListIsAdHighQualityMaterial
{
    public const NO_DiagnosisTaskAgentListV2DataTaskListIsAdHighQualityMaterial = 'NO';
    public const UNKNOWN_DiagnosisTaskAgentListV2DataTaskListIsAdHighQualityMaterial = 'UNKNOWN';
    public const YES_DiagnosisTaskAgentListV2DataTaskListIsAdHighQualityMaterial = 'YES';

    public const ALLOWED_VALUES = [
        self::NO_DiagnosisTaskAgentListV2DataTaskListIsAdHighQualityMaterial,
        self::UNKNOWN_DiagnosisTaskAgentListV2DataTaskListIsAdHighQualityMaterial,
        self::YES_DiagnosisTaskAgentListV2DataTaskListIsAdHighQualityMaterial,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DiagnosisTaskAgentListV2DataTaskListIsAdHighQualityMaterial', $value));
        }
        return (string) $value;
    }
}
