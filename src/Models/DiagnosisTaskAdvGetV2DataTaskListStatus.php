<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DiagnosisTaskAdvGetV2DataTaskListStatus
{
    public const FAILED_DiagnosisTaskAdvGetV2DataTaskListStatus = 'FAILED';
    public const PENDING_DiagnosisTaskAdvGetV2DataTaskListStatus = 'PENDING';
    public const SUCCESS_DiagnosisTaskAdvGetV2DataTaskListStatus = 'SUCCESS';

    public const ALLOWED_VALUES = [
        self::FAILED_DiagnosisTaskAdvGetV2DataTaskListStatus,
        self::PENDING_DiagnosisTaskAdvGetV2DataTaskListStatus,
        self::SUCCESS_DiagnosisTaskAdvGetV2DataTaskListStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DiagnosisTaskAdvGetV2DataTaskListStatus', $value));
        }
        return (string) $value;
    }
}
