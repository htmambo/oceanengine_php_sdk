<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QueryRebateBalanceV2FilteringBillingType
{
    public const JING_JIA_QueryRebateBalanceV2FilteringBillingType = 'JING_JIA';
    public const PIN_PAI_QueryRebateBalanceV2FilteringBillingType = 'PIN_PAI';

    public const ALLOWED_VALUES = [
        self::JING_JIA_QueryRebateBalanceV2FilteringBillingType,
        self::PIN_PAI_QueryRebateBalanceV2FilteringBillingType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QueryRebateBalanceV2FilteringBillingType', $value));
        }
        return (string) $value;
    }
}
