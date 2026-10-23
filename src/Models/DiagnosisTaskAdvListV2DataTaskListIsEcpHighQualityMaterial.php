<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DiagnosisTaskAdvListV2DataTaskListIsEcpHighQualityMaterial
{
    public const NO_DiagnosisTaskAdvListV2DataTaskListIsEcpHighQualityMaterial = 'NO';
    public const UNKNOWN_DiagnosisTaskAdvListV2DataTaskListIsEcpHighQualityMaterial = 'UNKNOWN';
    public const YES_DiagnosisTaskAdvListV2DataTaskListIsEcpHighQualityMaterial = 'YES';

    public const ALLOWED_VALUES = [
        self::NO_DiagnosisTaskAdvListV2DataTaskListIsEcpHighQualityMaterial,
        self::UNKNOWN_DiagnosisTaskAdvListV2DataTaskListIsEcpHighQualityMaterial,
        self::YES_DiagnosisTaskAdvListV2DataTaskListIsEcpHighQualityMaterial,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DiagnosisTaskAdvListV2DataTaskListIsEcpHighQualityMaterial', $value));
        }
        return (string) $value;
    }
}
