<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DiagnosisTaskAdvGetV2DataTaskListIsEcpHighQualityMaterial
{
    public const NO_DiagnosisTaskAdvGetV2DataTaskListIsEcpHighQualityMaterial = 'NO';
    public const UNKNOWN_DiagnosisTaskAdvGetV2DataTaskListIsEcpHighQualityMaterial = 'UNKNOWN';
    public const YES_DiagnosisTaskAdvGetV2DataTaskListIsEcpHighQualityMaterial = 'YES';

    public const ALLOWED_VALUES = [
        self::NO_DiagnosisTaskAdvGetV2DataTaskListIsEcpHighQualityMaterial,
        self::UNKNOWN_DiagnosisTaskAdvGetV2DataTaskListIsEcpHighQualityMaterial,
        self::YES_DiagnosisTaskAdvGetV2DataTaskListIsEcpHighQualityMaterial,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DiagnosisTaskAdvGetV2DataTaskListIsEcpHighQualityMaterial', $value));
        }
        return (string) $value;
    }
}
