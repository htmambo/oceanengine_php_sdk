<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DiagnosisTaskAgentListV2Status
{
    public const FAILED_DiagnosisTaskAgentListV2Status = 'FAILED';
    public const PENDING_DiagnosisTaskAgentListV2Status = 'PENDING';
    public const SUCCESS_DiagnosisTaskAgentListV2Status = 'SUCCESS';

    public const ALLOWED_VALUES = [
        self::FAILED_DiagnosisTaskAgentListV2Status,
        self::PENDING_DiagnosisTaskAgentListV2Status,
        self::SUCCESS_DiagnosisTaskAgentListV2Status,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DiagnosisTaskAgentListV2Status', $value));
        }
        return (string) $value;
    }
}
