<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QueryRebateBalanceV2FilteringUseType
{
    public const CASH_QueryRebateBalanceV2FilteringUseType = 'CASH';
    public const CHARGE_QueryRebateBalanceV2FilteringUseType = 'CHARGE';
    public const HEDGING_QueryRebateBalanceV2FilteringUseType = 'HEDGING';
    public const NONPAYMENT_QueryRebateBalanceV2FilteringUseType = 'NONPAYMENT';
    public const REVERT_QueryRebateBalanceV2FilteringUseType = 'REVERT';

    public const ALLOWED_VALUES = [
        self::CASH_QueryRebateBalanceV2FilteringUseType,
        self::CHARGE_QueryRebateBalanceV2FilteringUseType,
        self::HEDGING_QueryRebateBalanceV2FilteringUseType,
        self::NONPAYMENT_QueryRebateBalanceV2FilteringUseType,
        self::REVERT_QueryRebateBalanceV2FilteringUseType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QueryRebateBalanceV2FilteringUseType', $value));
        }
        return (string) $value;
    }
}
