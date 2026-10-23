<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QueryRebateAccountingInfoV2FilteringApprovalStatus
{
    public const AGENT_APPROVING_QueryRebateAccountingInfoV2FilteringApprovalStatus = 'AGENT_APPROVING';
    public const BUSINESS_APPROVING_QueryRebateAccountingInfoV2FilteringApprovalStatus = 'BUSINESS_APPROVING';
    public const APPROVED_QueryRebateAccountingInfoV2FilteringApprovalStatus = 'APPROVED';

    public const ALLOWED_VALUES = [
        self::AGENT_APPROVING_QueryRebateAccountingInfoV2FilteringApprovalStatus,
        self::BUSINESS_APPROVING_QueryRebateAccountingInfoV2FilteringApprovalStatus,
        self::APPROVED_QueryRebateAccountingInfoV2FilteringApprovalStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QueryRebateAccountingInfoV2FilteringApprovalStatus', $value));
        }
        return (string) $value;
    }
}
