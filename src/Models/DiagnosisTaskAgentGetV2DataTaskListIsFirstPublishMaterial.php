<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DiagnosisTaskAgentGetV2DataTaskListIsFirstPublishMaterial
{
    public const NO_DiagnosisTaskAgentGetV2DataTaskListIsFirstPublishMaterial = 'NO';
    public const UNKNOWN_DiagnosisTaskAgentGetV2DataTaskListIsFirstPublishMaterial = 'UNKNOWN';
    public const YES_DiagnosisTaskAgentGetV2DataTaskListIsFirstPublishMaterial = 'YES';

    public const ALLOWED_VALUES = [
        self::NO_DiagnosisTaskAgentGetV2DataTaskListIsFirstPublishMaterial,
        self::UNKNOWN_DiagnosisTaskAgentGetV2DataTaskListIsFirstPublishMaterial,
        self::YES_DiagnosisTaskAgentGetV2DataTaskListIsFirstPublishMaterial,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DiagnosisTaskAgentGetV2DataTaskListIsFirstPublishMaterial', $value));
        }
        return (string) $value;
    }
}
