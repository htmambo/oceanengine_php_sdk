<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QueryRebateAccountingInfoV2FilteringIsCreateRebate
{
    public const YES_QueryRebateAccountingInfoV2FilteringIsCreateRebate = 'YES';
    public const NO_QueryRebateAccountingInfoV2FilteringIsCreateRebate = 'NO';

    public const ALLOWED_VALUES = [
        self::YES_QueryRebateAccountingInfoV2FilteringIsCreateRebate,
        self::NO_QueryRebateAccountingInfoV2FilteringIsCreateRebate,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QueryRebateAccountingInfoV2FilteringIsCreateRebate', $value));
        }
        return (string) $value;
    }
}
