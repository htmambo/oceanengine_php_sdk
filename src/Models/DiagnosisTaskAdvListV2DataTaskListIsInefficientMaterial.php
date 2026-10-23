<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DiagnosisTaskAdvListV2DataTaskListIsInefficientMaterial
{
    public const NO_DiagnosisTaskAdvListV2DataTaskListIsInefficientMaterial = 'NO';
    public const UNKNOWN_DiagnosisTaskAdvListV2DataTaskListIsInefficientMaterial = 'UNKNOWN';
    public const YES_DiagnosisTaskAdvListV2DataTaskListIsInefficientMaterial = 'YES';

    public const ALLOWED_VALUES = [
        self::NO_DiagnosisTaskAdvListV2DataTaskListIsInefficientMaterial,
        self::UNKNOWN_DiagnosisTaskAdvListV2DataTaskListIsInefficientMaterial,
        self::YES_DiagnosisTaskAdvListV2DataTaskListIsInefficientMaterial,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DiagnosisTaskAdvListV2DataTaskListIsInefficientMaterial', $value));
        }
        return (string) $value;
    }
}
