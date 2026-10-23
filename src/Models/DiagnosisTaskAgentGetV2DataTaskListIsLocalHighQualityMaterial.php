<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DiagnosisTaskAgentGetV2DataTaskListIsLocalHighQualityMaterial
{
    public const NO_DiagnosisTaskAgentGetV2DataTaskListIsLocalHighQualityMaterial = 'NO';
    public const UNKNOWN_DiagnosisTaskAgentGetV2DataTaskListIsLocalHighQualityMaterial = 'UNKNOWN';
    public const YES_DiagnosisTaskAgentGetV2DataTaskListIsLocalHighQualityMaterial = 'YES';

    public const ALLOWED_VALUES = [
        self::NO_DiagnosisTaskAgentGetV2DataTaskListIsLocalHighQualityMaterial,
        self::UNKNOWN_DiagnosisTaskAgentGetV2DataTaskListIsLocalHighQualityMaterial,
        self::YES_DiagnosisTaskAgentGetV2DataTaskListIsLocalHighQualityMaterial,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DiagnosisTaskAgentGetV2DataTaskListIsLocalHighQualityMaterial', $value));
        }
        return (string) $value;
    }
}
