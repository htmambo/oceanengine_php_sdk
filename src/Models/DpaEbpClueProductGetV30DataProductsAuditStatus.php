<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DpaEbpClueProductGetV30DataProductsAuditStatus
{
    public const AUDIT_STATUS_APPROVE_DpaEbpClueProductGetV30DataProductsAuditStatus = 'AUDIT_STATUS_APPROVE';
    public const AUDIT_STATUS_INIT_DpaEbpClueProductGetV30DataProductsAuditStatus = 'AUDIT_STATUS_INIT';
    public const AUDIT_STATUS_REJECT_DpaEbpClueProductGetV30DataProductsAuditStatus = 'AUDIT_STATUS_REJECT';

    public const ALLOWED_VALUES = [
        self::AUDIT_STATUS_APPROVE_DpaEbpClueProductGetV30DataProductsAuditStatus,
        self::AUDIT_STATUS_INIT_DpaEbpClueProductGetV30DataProductsAuditStatus,
        self::AUDIT_STATUS_REJECT_DpaEbpClueProductGetV30DataProductsAuditStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DpaEbpClueProductGetV30DataProductsAuditStatus', $value));
        }
        return (string) $value;
    }
}
