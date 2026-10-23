<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class FilePreauditGetV30FilteringStatus
{
    public const AUDITING_FilePreauditGetV30FilteringStatus = 'AUDITING';
    public const AUDIT_ACCEPTED_FilePreauditGetV30FilteringStatus = 'AUDIT_ACCEPTED';
    public const AUDIT_FAILED_FilePreauditGetV30FilteringStatus = 'AUDIT_FAILED';
    public const AUDIT_REJECT_FilePreauditGetV30FilteringStatus = 'AUDIT_REJECT';
    public const AUDIT_SUBMIT_FilePreauditGetV30FilteringStatus = 'AUDIT_SUBMIT';
    public const AUDIT_TIMEOUT_FilePreauditGetV30FilteringStatus = 'AUDIT_TIMEOUT';

    public const ALLOWED_VALUES = [
        self::AUDITING_FilePreauditGetV30FilteringStatus,
        self::AUDIT_ACCEPTED_FilePreauditGetV30FilteringStatus,
        self::AUDIT_FAILED_FilePreauditGetV30FilteringStatus,
        self::AUDIT_REJECT_FilePreauditGetV30FilteringStatus,
        self::AUDIT_SUBMIT_FilePreauditGetV30FilteringStatus,
        self::AUDIT_TIMEOUT_FilePreauditGetV30FilteringStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum FilePreauditGetV30FilteringStatus', $value));
        }
        return (string) $value;
    }
}
