<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DpaClueProductListV2FilteringAuditStatus
{
    public const AUDIT_STATUS_APPROVE_DpaClueProductListV2FilteringAuditStatus = 'AUDIT_STATUS_APPROVE';
    public const AUDIT_STATUS_INIT_DpaClueProductListV2FilteringAuditStatus = 'AUDIT_STATUS_INIT';
    public const AUDIT_STATUS_REJECT_DpaClueProductListV2FilteringAuditStatus = 'AUDIT_STATUS_REJECT';

    public const ALLOWED_VALUES = [
        self::AUDIT_STATUS_APPROVE_DpaClueProductListV2FilteringAuditStatus,
        self::AUDIT_STATUS_INIT_DpaClueProductListV2FilteringAuditStatus,
        self::AUDIT_STATUS_REJECT_DpaClueProductListV2FilteringAuditStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DpaClueProductListV2FilteringAuditStatus', $value));
        }
        return (string) $value;
    }
}
