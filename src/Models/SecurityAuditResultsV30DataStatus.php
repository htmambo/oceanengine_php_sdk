<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SecurityAuditResultsV30DataStatus
{
    public const APPROVE_SecurityAuditResultsV30DataStatus = 'APPROVE';
    public const REJECT_SecurityAuditResultsV30DataStatus = 'REJECT';
    public const AUDITING_SecurityAuditResultsV30DataStatus = 'AUDITING';

    public const ALLOWED_VALUES = [
        self::APPROVE_SecurityAuditResultsV30DataStatus,
        self::REJECT_SecurityAuditResultsV30DataStatus,
        self::AUDITING_SecurityAuditResultsV30DataStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SecurityAuditResultsV30DataStatus', $value));
        }
        return (string) $value;
    }
}
