<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QueryRebateBalanceV2FilteringStampType
{
    public const ONLINE_QueryRebateBalanceV2FilteringStampType = 'ONLINE';
    public const DEFAULT_QueryRebateBalanceV2FilteringStampType = 'DEFAULT';

    public const ALLOWED_VALUES = [
        self::ONLINE_QueryRebateBalanceV2FilteringStampType,
        self::DEFAULT_QueryRebateBalanceV2FilteringStampType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QueryRebateBalanceV2FilteringStampType', $value));
        }
        return (string) $value;
    }
}
