<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class FileQualityGetV30DataListStatus
{
    public const AUDITING_FileQualityGetV30DataListStatus = 'AUDITING';
    public const AUDIT_ACCEPTED_FileQualityGetV30DataListStatus = 'AUDIT_ACCEPTED';
    public const AUDIT_FAILED_FileQualityGetV30DataListStatus = 'AUDIT_FAILED';
    public const AUDIT_REJECT_FileQualityGetV30DataListStatus = 'AUDIT_REJECT';
    public const AUDIT_SUBMIT_FileQualityGetV30DataListStatus = 'AUDIT_SUBMIT';
    public const AUDIT_TIMEOUT_FileQualityGetV30DataListStatus = 'AUDIT_TIMEOUT';

    public const ALLOWED_VALUES = [
        self::AUDITING_FileQualityGetV30DataListStatus,
        self::AUDIT_ACCEPTED_FileQualityGetV30DataListStatus,
        self::AUDIT_FAILED_FileQualityGetV30DataListStatus,
        self::AUDIT_REJECT_FileQualityGetV30DataListStatus,
        self::AUDIT_SUBMIT_FileQualityGetV30DataListStatus,
        self::AUDIT_TIMEOUT_FileQualityGetV30DataListStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum FileQualityGetV30DataListStatus', $value));
        }
        return (string) $value;
    }
}
