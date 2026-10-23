<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QueryRebateBalanceV2FilteringArchiveStatusList
{
    public const NO_RETRIEVE_QueryRebateBalanceV2FilteringArchiveStatusList = 'NO_RETRIEVE';
    public const RETRIEVED_QueryRebateBalanceV2FilteringArchiveStatusList = 'RETRIEVED';
    public const ARCHIVED_QueryRebateBalanceV2FilteringArchiveStatusList = 'ARCHIVED';

    public const ALLOWED_VALUES = [
        self::NO_RETRIEVE_QueryRebateBalanceV2FilteringArchiveStatusList,
        self::RETRIEVED_QueryRebateBalanceV2FilteringArchiveStatusList,
        self::ARCHIVED_QueryRebateBalanceV2FilteringArchiveStatusList,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QueryRebateBalanceV2FilteringArchiveStatusList', $value));
        }
        return (string) $value;
    }
}
