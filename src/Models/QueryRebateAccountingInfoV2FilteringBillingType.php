<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QueryRebateAccountingInfoV2FilteringBillingType
{
    public const JING_JIA_QueryRebateAccountingInfoV2FilteringBillingType = 'JING_JIA';
    public const PIN_PAI_QueryRebateAccountingInfoV2FilteringBillingType = 'PIN_PAI';

    public const ALLOWED_VALUES = [
        self::JING_JIA_QueryRebateAccountingInfoV2FilteringBillingType,
        self::PIN_PAI_QueryRebateAccountingInfoV2FilteringBillingType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QueryRebateAccountingInfoV2FilteringBillingType', $value));
        }
        return (string) $value;
    }
}
