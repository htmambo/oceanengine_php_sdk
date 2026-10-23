<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QueryRebateBalanceV2FilteringStampStatusList
{
    public const NO_QueryRebateBalanceV2FilteringStampStatusList = 'NO';
    public const STAMPING_QueryRebateBalanceV2FilteringStampStatusList = 'STAMPING';
    public const STAMPED_QueryRebateBalanceV2FilteringStampStatusList = 'STAMPED';

    public const ALLOWED_VALUES = [
        self::NO_QueryRebateBalanceV2FilteringStampStatusList,
        self::STAMPING_QueryRebateBalanceV2FilteringStampStatusList,
        self::STAMPED_QueryRebateBalanceV2FilteringStampStatusList,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QueryRebateBalanceV2FilteringStampStatusList', $value));
        }
        return (string) $value;
    }
}
