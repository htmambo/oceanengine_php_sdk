<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DiagnosisTaskAdvGetV2DataTaskListIsFirstPublishMaterial
{
    public const NO_DiagnosisTaskAdvGetV2DataTaskListIsFirstPublishMaterial = 'NO';
    public const UNKNOWN_DiagnosisTaskAdvGetV2DataTaskListIsFirstPublishMaterial = 'UNKNOWN';
    public const YES_DiagnosisTaskAdvGetV2DataTaskListIsFirstPublishMaterial = 'YES';

    public const ALLOWED_VALUES = [
        self::NO_DiagnosisTaskAdvGetV2DataTaskListIsFirstPublishMaterial,
        self::UNKNOWN_DiagnosisTaskAdvGetV2DataTaskListIsFirstPublishMaterial,
        self::YES_DiagnosisTaskAdvGetV2DataTaskListIsFirstPublishMaterial,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DiagnosisTaskAdvGetV2DataTaskListIsFirstPublishMaterial', $value));
        }
        return (string) $value;
    }
}
