<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DiagnosisTaskAdvListV2Status
{
    public const FAILED_DiagnosisTaskAdvListV2Status = 'FAILED';
    public const PENDING_DiagnosisTaskAdvListV2Status = 'PENDING';
    public const SUCCESS_DiagnosisTaskAdvListV2Status = 'SUCCESS';

    public const ALLOWED_VALUES = [
        self::FAILED_DiagnosisTaskAdvListV2Status,
        self::PENDING_DiagnosisTaskAdvListV2Status,
        self::SUCCESS_DiagnosisTaskAdvListV2Status,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DiagnosisTaskAdvListV2Status', $value));
        }
        return (string) $value;
    }
}
