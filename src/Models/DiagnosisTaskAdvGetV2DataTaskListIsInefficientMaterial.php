<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DiagnosisTaskAdvGetV2DataTaskListIsInefficientMaterial
{
    public const NO_DiagnosisTaskAdvGetV2DataTaskListIsInefficientMaterial = 'NO';
    public const UNKNOWN_DiagnosisTaskAdvGetV2DataTaskListIsInefficientMaterial = 'UNKNOWN';
    public const YES_DiagnosisTaskAdvGetV2DataTaskListIsInefficientMaterial = 'YES';

    public const ALLOWED_VALUES = [
        self::NO_DiagnosisTaskAdvGetV2DataTaskListIsInefficientMaterial,
        self::UNKNOWN_DiagnosisTaskAdvGetV2DataTaskListIsInefficientMaterial,
        self::YES_DiagnosisTaskAdvGetV2DataTaskListIsInefficientMaterial,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DiagnosisTaskAdvGetV2DataTaskListIsInefficientMaterial', $value));
        }
        return (string) $value;
    }
}
