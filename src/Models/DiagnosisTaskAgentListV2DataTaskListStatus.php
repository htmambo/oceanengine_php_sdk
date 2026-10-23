<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DiagnosisTaskAgentListV2DataTaskListStatus
{
    public const FAILED_DiagnosisTaskAgentListV2DataTaskListStatus = 'FAILED';
    public const PENDING_DiagnosisTaskAgentListV2DataTaskListStatus = 'PENDING';
    public const SUCCESS_DiagnosisTaskAgentListV2DataTaskListStatus = 'SUCCESS';

    public const ALLOWED_VALUES = [
        self::FAILED_DiagnosisTaskAgentListV2DataTaskListStatus,
        self::PENDING_DiagnosisTaskAgentListV2DataTaskListStatus,
        self::SUCCESS_DiagnosisTaskAgentListV2DataTaskListStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DiagnosisTaskAgentListV2DataTaskListStatus', $value));
        }
        return (string) $value;
    }
}
