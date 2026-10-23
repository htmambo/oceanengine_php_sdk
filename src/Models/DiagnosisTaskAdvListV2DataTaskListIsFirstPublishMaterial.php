<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DiagnosisTaskAdvListV2DataTaskListIsFirstPublishMaterial
{
    public const NO_DiagnosisTaskAdvListV2DataTaskListIsFirstPublishMaterial = 'NO';
    public const UNKNOWN_DiagnosisTaskAdvListV2DataTaskListIsFirstPublishMaterial = 'UNKNOWN';
    public const YES_DiagnosisTaskAdvListV2DataTaskListIsFirstPublishMaterial = 'YES';

    public const ALLOWED_VALUES = [
        self::NO_DiagnosisTaskAdvListV2DataTaskListIsFirstPublishMaterial,
        self::UNKNOWN_DiagnosisTaskAdvListV2DataTaskListIsFirstPublishMaterial,
        self::YES_DiagnosisTaskAdvListV2DataTaskListIsFirstPublishMaterial,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DiagnosisTaskAdvListV2DataTaskListIsFirstPublishMaterial', $value));
        }
        return (string) $value;
    }
}
