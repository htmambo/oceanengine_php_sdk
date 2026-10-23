<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DiagnosisTaskAdvGetV2DataTaskListIsLocalHighQualityMaterial
{
    public const NO_DiagnosisTaskAdvGetV2DataTaskListIsLocalHighQualityMaterial = 'NO';
    public const UNKNOWN_DiagnosisTaskAdvGetV2DataTaskListIsLocalHighQualityMaterial = 'UNKNOWN';
    public const YES_DiagnosisTaskAdvGetV2DataTaskListIsLocalHighQualityMaterial = 'YES';

    public const ALLOWED_VALUES = [
        self::NO_DiagnosisTaskAdvGetV2DataTaskListIsLocalHighQualityMaterial,
        self::UNKNOWN_DiagnosisTaskAdvGetV2DataTaskListIsLocalHighQualityMaterial,
        self::YES_DiagnosisTaskAdvGetV2DataTaskListIsLocalHighQualityMaterial,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DiagnosisTaskAdvGetV2DataTaskListIsLocalHighQualityMaterial', $value));
        }
        return (string) $value;
    }
}
