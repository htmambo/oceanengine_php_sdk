<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DpaClueProductDetailV2DataProductsAuditStatus
{
    public const AUDIT_STATUS_APPROVE_DpaClueProductDetailV2DataProductsAuditStatus = 'AUDIT_STATUS_APPROVE';
    public const AUDIT_STATUS_INIT_DpaClueProductDetailV2DataProductsAuditStatus = 'AUDIT_STATUS_INIT';
    public const AUDIT_STATUS_REJECT_DpaClueProductDetailV2DataProductsAuditStatus = 'AUDIT_STATUS_REJECT';

    public const ALLOWED_VALUES = [
        self::AUDIT_STATUS_APPROVE_DpaClueProductDetailV2DataProductsAuditStatus,
        self::AUDIT_STATUS_INIT_DpaClueProductDetailV2DataProductsAuditStatus,
        self::AUDIT_STATUS_REJECT_DpaClueProductDetailV2DataProductsAuditStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DpaClueProductDetailV2DataProductsAuditStatus', $value));
        }
        return (string) $value;
    }
}
