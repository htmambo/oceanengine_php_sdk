<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DpaEbpClueProductListV30AuditStatus
{
    public const AUDIT_STATUS_APPROVE_DpaEbpClueProductListV30AuditStatus = 'AUDIT_STATUS_APPROVE';
    public const AUDIT_STATUS_INIT_DpaEbpClueProductListV30AuditStatus = 'AUDIT_STATUS_INIT';
    public const AUDIT_STATUS_REJECT_DpaEbpClueProductListV30AuditStatus = 'AUDIT_STATUS_REJECT';

    public const ALLOWED_VALUES = [
        self::AUDIT_STATUS_APPROVE_DpaEbpClueProductListV30AuditStatus,
        self::AUDIT_STATUS_INIT_DpaEbpClueProductListV30AuditStatus,
        self::AUDIT_STATUS_REJECT_DpaEbpClueProductListV30AuditStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DpaEbpClueProductListV30AuditStatus', $value));
        }
        return (string) $value;
    }
}
