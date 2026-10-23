<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DiagnosisTaskAgentGetV2DataTaskListStatus
{
    public const FAILED_DiagnosisTaskAgentGetV2DataTaskListStatus = 'FAILED';
    public const PENDING_DiagnosisTaskAgentGetV2DataTaskListStatus = 'PENDING';
    public const SUCCESS_DiagnosisTaskAgentGetV2DataTaskListStatus = 'SUCCESS';

    public const ALLOWED_VALUES = [
        self::FAILED_DiagnosisTaskAgentGetV2DataTaskListStatus,
        self::PENDING_DiagnosisTaskAgentGetV2DataTaskListStatus,
        self::SUCCESS_DiagnosisTaskAgentGetV2DataTaskListStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DiagnosisTaskAgentGetV2DataTaskListStatus', $value));
        }
        return (string) $value;
    }
}
