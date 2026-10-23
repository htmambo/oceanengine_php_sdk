<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QueryRebateAccountingInfoV2FilteringUseType
{
    public const CASH_QueryRebateAccountingInfoV2FilteringUseType = 'CASH';
    public const CHARGE_QueryRebateAccountingInfoV2FilteringUseType = 'CHARGE';
    public const HEDGING_QueryRebateAccountingInfoV2FilteringUseType = 'HEDGING';
    public const NONPAYMENT_QueryRebateAccountingInfoV2FilteringUseType = 'NONPAYMENT';
    public const REVERT_QueryRebateAccountingInfoV2FilteringUseType = 'REVERT';

    public const ALLOWED_VALUES = [
        self::CASH_QueryRebateAccountingInfoV2FilteringUseType,
        self::CHARGE_QueryRebateAccountingInfoV2FilteringUseType,
        self::HEDGING_QueryRebateAccountingInfoV2FilteringUseType,
        self::NONPAYMENT_QueryRebateAccountingInfoV2FilteringUseType,
        self::REVERT_QueryRebateAccountingInfoV2FilteringUseType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QueryRebateAccountingInfoV2FilteringUseType', $value));
        }
        return (string) $value;
    }
}
