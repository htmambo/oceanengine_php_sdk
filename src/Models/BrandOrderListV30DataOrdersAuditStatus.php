<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandOrderListV30DataOrdersAuditStatus
{
    public const AUDITING_BrandOrderListV30DataOrdersAuditStatus = 'AUDITING';
    public const NO_CREATIVE_BrandOrderListV30DataOrdersAuditStatus = 'NO_CREATIVE';
    public const PARTIALLY_PASSED_BrandOrderListV30DataOrdersAuditStatus = 'PARTIALLY_PASSED';
    public const PASSED_BrandOrderListV30DataOrdersAuditStatus = 'PASSED';
    public const REJECTED_BrandOrderListV30DataOrdersAuditStatus = 'REJECTED';
    public const UNKNOWN_BrandOrderListV30DataOrdersAuditStatus = 'UNKNOWN';
    public const WAIT_AUDIT_BrandOrderListV30DataOrdersAuditStatus = 'WAIT_AUDIT';

    public const ALLOWED_VALUES = [
        self::AUDITING_BrandOrderListV30DataOrdersAuditStatus,
        self::NO_CREATIVE_BrandOrderListV30DataOrdersAuditStatus,
        self::PARTIALLY_PASSED_BrandOrderListV30DataOrdersAuditStatus,
        self::PASSED_BrandOrderListV30DataOrdersAuditStatus,
        self::REJECTED_BrandOrderListV30DataOrdersAuditStatus,
        self::UNKNOWN_BrandOrderListV30DataOrdersAuditStatus,
        self::WAIT_AUDIT_BrandOrderListV30DataOrdersAuditStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandOrderListV30DataOrdersAuditStatus', $value));
        }
        return (string) $value;
    }
}
