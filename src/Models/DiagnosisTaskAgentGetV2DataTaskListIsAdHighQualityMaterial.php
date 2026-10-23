<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DiagnosisTaskAgentGetV2DataTaskListIsAdHighQualityMaterial
{
    public const NO_DiagnosisTaskAgentGetV2DataTaskListIsAdHighQualityMaterial = 'NO';
    public const UNKNOWN_DiagnosisTaskAgentGetV2DataTaskListIsAdHighQualityMaterial = 'UNKNOWN';
    public const YES_DiagnosisTaskAgentGetV2DataTaskListIsAdHighQualityMaterial = 'YES';

    public const ALLOWED_VALUES = [
        self::NO_DiagnosisTaskAgentGetV2DataTaskListIsAdHighQualityMaterial,
        self::UNKNOWN_DiagnosisTaskAgentGetV2DataTaskListIsAdHighQualityMaterial,
        self::YES_DiagnosisTaskAgentGetV2DataTaskListIsAdHighQualityMaterial,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DiagnosisTaskAgentGetV2DataTaskListIsAdHighQualityMaterial', $value));
        }
        return (string) $value;
    }
}
