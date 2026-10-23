<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalMarketPageListGetV30DataMarkPageIdListStatus
{
    public const MARKET_PAGE_DISABLE_LocalMarketPageListGetV30DataMarkPageIdListStatus = 'MARKET_PAGE_DISABLE';
    public const MARKET_PAGE_ENABLE_LocalMarketPageListGetV30DataMarkPageIdListStatus = 'MARKET_PAGE_ENABLE';

    public const ALLOWED_VALUES = [
        self::MARKET_PAGE_DISABLE_LocalMarketPageListGetV30DataMarkPageIdListStatus,
        self::MARKET_PAGE_ENABLE_LocalMarketPageListGetV30DataMarkPageIdListStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalMarketPageListGetV30DataMarkPageIdListStatus', $value));
        }
        return (string) $value;
    }
}
