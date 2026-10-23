<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QueryRebateBalanceV2FilteringApprovalStatus
{
    public const AGENT_APPROVING_QueryRebateBalanceV2FilteringApprovalStatus = 'AGENT_APPROVING';
    public const APPROVED_QueryRebateBalanceV2FilteringApprovalStatus = 'APPROVED';

    public const ALLOWED_VALUES = [
        self::AGENT_APPROVING_QueryRebateBalanceV2FilteringApprovalStatus,
        self::APPROVED_QueryRebateBalanceV2FilteringApprovalStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QueryRebateBalanceV2FilteringApprovalStatus', $value));
        }
        return (string) $value;
    }
}
