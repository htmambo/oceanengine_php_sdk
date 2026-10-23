<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DiagnosisTaskAdvListV2DataTaskListIsAdHighQualityMaterial
{
    public const NO_DiagnosisTaskAdvListV2DataTaskListIsAdHighQualityMaterial = 'NO';
    public const UNKNOWN_DiagnosisTaskAdvListV2DataTaskListIsAdHighQualityMaterial = 'UNKNOWN';
    public const YES_DiagnosisTaskAdvListV2DataTaskListIsAdHighQualityMaterial = 'YES';

    public const ALLOWED_VALUES = [
        self::NO_DiagnosisTaskAdvListV2DataTaskListIsAdHighQualityMaterial,
        self::UNKNOWN_DiagnosisTaskAdvListV2DataTaskListIsAdHighQualityMaterial,
        self::YES_DiagnosisTaskAdvListV2DataTaskListIsAdHighQualityMaterial,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DiagnosisTaskAdvListV2DataTaskListIsAdHighQualityMaterial', $value));
        }
        return (string) $value;
    }
}
