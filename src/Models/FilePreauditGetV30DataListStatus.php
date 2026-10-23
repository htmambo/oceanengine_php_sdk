<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class FilePreauditGetV30DataListStatus
{
    public const AUDITING_FilePreauditGetV30DataListStatus = 'AUDITING';
    public const AUDIT_ACCEPTED_FilePreauditGetV30DataListStatus = 'AUDIT_ACCEPTED';
    public const AUDIT_FAILED_FilePreauditGetV30DataListStatus = 'AUDIT_FAILED';
    public const AUDIT_REJECT_FilePreauditGetV30DataListStatus = 'AUDIT_REJECT';
    public const AUDIT_SUBMIT_FilePreauditGetV30DataListStatus = 'AUDIT_SUBMIT';
    public const AUDIT_TIMEOUT_FilePreauditGetV30DataListStatus = 'AUDIT_TIMEOUT';

    public const ALLOWED_VALUES = [
        self::AUDITING_FilePreauditGetV30DataListStatus,
        self::AUDIT_ACCEPTED_FilePreauditGetV30DataListStatus,
        self::AUDIT_FAILED_FilePreauditGetV30DataListStatus,
        self::AUDIT_REJECT_FilePreauditGetV30DataListStatus,
        self::AUDIT_SUBMIT_FilePreauditGetV30DataListStatus,
        self::AUDIT_TIMEOUT_FilePreauditGetV30DataListStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum FilePreauditGetV30DataListStatus', $value));
        }
        return (string) $value;
    }
}
