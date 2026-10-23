<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandOrderListV30FilterAuditStatus
{
    public const AUDITING_BrandOrderListV30FilterAuditStatus = 'AUDITING';
    public const NO_CREATIVE_BrandOrderListV30FilterAuditStatus = 'NO_CREATIVE';
    public const PARTIALLY_PASSED_BrandOrderListV30FilterAuditStatus = 'PARTIALLY_PASSED';
    public const PASSED_BrandOrderListV30FilterAuditStatus = 'PASSED';
    public const REJECTED_BrandOrderListV30FilterAuditStatus = 'REJECTED';
    public const UNKNOWN_BrandOrderListV30FilterAuditStatus = 'UNKNOWN';
    public const WAIT_AUDIT_BrandOrderListV30FilterAuditStatus = 'WAIT_AUDIT';

    public const ALLOWED_VALUES = [
        self::AUDITING_BrandOrderListV30FilterAuditStatus,
        self::NO_CREATIVE_BrandOrderListV30FilterAuditStatus,
        self::PARTIALLY_PASSED_BrandOrderListV30FilterAuditStatus,
        self::PASSED_BrandOrderListV30FilterAuditStatus,
        self::REJECTED_BrandOrderListV30FilterAuditStatus,
        self::UNKNOWN_BrandOrderListV30FilterAuditStatus,
        self::WAIT_AUDIT_BrandOrderListV30FilterAuditStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandOrderListV30FilterAuditStatus', $value));
        }
        return (string) $value;
    }
}
