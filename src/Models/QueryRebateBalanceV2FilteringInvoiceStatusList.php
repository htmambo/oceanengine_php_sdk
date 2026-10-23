<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QueryRebateBalanceV2FilteringInvoiceStatusList
{
    public const NO_QueryRebateBalanceV2FilteringInvoiceStatusList = 'NO';
    public const PART_QueryRebateBalanceV2FilteringInvoiceStatusList = 'PART';
    public const COMPLETE_QueryRebateBalanceV2FilteringInvoiceStatusList = 'COMPLETE';

    public const ALLOWED_VALUES = [
        self::NO_QueryRebateBalanceV2FilteringInvoiceStatusList,
        self::PART_QueryRebateBalanceV2FilteringInvoiceStatusList,
        self::COMPLETE_QueryRebateBalanceV2FilteringInvoiceStatusList,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QueryRebateBalanceV2FilteringInvoiceStatusList', $value));
        }
        return (string) $value;
    }
}
