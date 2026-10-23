<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DiagnosisTaskAgentGetV2DataTaskListIsInefficientMaterial
{
    public const NO_DiagnosisTaskAgentGetV2DataTaskListIsInefficientMaterial = 'NO';
    public const UNKNOWN_DiagnosisTaskAgentGetV2DataTaskListIsInefficientMaterial = 'UNKNOWN';
    public const YES_DiagnosisTaskAgentGetV2DataTaskListIsInefficientMaterial = 'YES';

    public const ALLOWED_VALUES = [
        self::NO_DiagnosisTaskAgentGetV2DataTaskListIsInefficientMaterial,
        self::UNKNOWN_DiagnosisTaskAgentGetV2DataTaskListIsInefficientMaterial,
        self::YES_DiagnosisTaskAgentGetV2DataTaskListIsInefficientMaterial,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DiagnosisTaskAgentGetV2DataTaskListIsInefficientMaterial', $value));
        }
        return (string) $value;
    }
}
