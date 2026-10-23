<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DiagnosisTaskAdvGetV2DataTaskListIsAdHighQualityMaterial
{
    public const NO_DiagnosisTaskAdvGetV2DataTaskListIsAdHighQualityMaterial = 'NO';
    public const UNKNOWN_DiagnosisTaskAdvGetV2DataTaskListIsAdHighQualityMaterial = 'UNKNOWN';
    public const YES_DiagnosisTaskAdvGetV2DataTaskListIsAdHighQualityMaterial = 'YES';

    public const ALLOWED_VALUES = [
        self::NO_DiagnosisTaskAdvGetV2DataTaskListIsAdHighQualityMaterial,
        self::UNKNOWN_DiagnosisTaskAdvGetV2DataTaskListIsAdHighQualityMaterial,
        self::YES_DiagnosisTaskAdvGetV2DataTaskListIsAdHighQualityMaterial,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DiagnosisTaskAdvGetV2DataTaskListIsAdHighQualityMaterial', $value));
        }
        return (string) $value;
    }
}
