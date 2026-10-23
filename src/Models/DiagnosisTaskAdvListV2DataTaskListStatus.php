<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DiagnosisTaskAdvListV2DataTaskListStatus
{
    public const FAILED_DiagnosisTaskAdvListV2DataTaskListStatus = 'FAILED';
    public const PENDING_DiagnosisTaskAdvListV2DataTaskListStatus = 'PENDING';
    public const SUCCESS_DiagnosisTaskAdvListV2DataTaskListStatus = 'SUCCESS';

    public const ALLOWED_VALUES = [
        self::FAILED_DiagnosisTaskAdvListV2DataTaskListStatus,
        self::PENDING_DiagnosisTaskAdvListV2DataTaskListStatus,
        self::SUCCESS_DiagnosisTaskAdvListV2DataTaskListStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DiagnosisTaskAdvListV2DataTaskListStatus', $value));
        }
        return (string) $value;
    }
}
