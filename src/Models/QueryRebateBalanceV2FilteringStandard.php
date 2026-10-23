<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QueryRebateBalanceV2FilteringStandard
{
    public const YES_QueryRebateBalanceV2FilteringStandard = 'YES';
    public const NO_QueryRebateBalanceV2FilteringStandard = 'NO';
    public const YES_OF_INSPIRE_QueryRebateBalanceV2FilteringStandard = 'YES_OF_INSPIRE';

    public const ALLOWED_VALUES = [
        self::YES_QueryRebateBalanceV2FilteringStandard,
        self::NO_QueryRebateBalanceV2FilteringStandard,
        self::YES_OF_INSPIRE_QueryRebateBalanceV2FilteringStandard,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QueryRebateBalanceV2FilteringStandard', $value));
        }
        return (string) $value;
    }
}
