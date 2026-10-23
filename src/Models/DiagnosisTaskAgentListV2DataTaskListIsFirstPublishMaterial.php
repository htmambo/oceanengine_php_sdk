<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DiagnosisTaskAgentListV2DataTaskListIsFirstPublishMaterial
{
    public const NO_DiagnosisTaskAgentListV2DataTaskListIsFirstPublishMaterial = 'NO';
    public const UNKNOWN_DiagnosisTaskAgentListV2DataTaskListIsFirstPublishMaterial = 'UNKNOWN';
    public const YES_DiagnosisTaskAgentListV2DataTaskListIsFirstPublishMaterial = 'YES';

    public const ALLOWED_VALUES = [
        self::NO_DiagnosisTaskAgentListV2DataTaskListIsFirstPublishMaterial,
        self::UNKNOWN_DiagnosisTaskAgentListV2DataTaskListIsFirstPublishMaterial,
        self::YES_DiagnosisTaskAgentListV2DataTaskListIsFirstPublishMaterial,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DiagnosisTaskAgentListV2DataTaskListIsFirstPublishMaterial', $value));
        }
        return (string) $value;
    }
}
