<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalMarketPageGetV30DataMarkPageInfoStatus
{
    public const MARKET_PAGE_DISABLE_LocalMarketPageGetV30DataMarkPageInfoStatus = 'MARKET_PAGE_DISABLE';
    public const MARKET_PAGE_ENABLE_LocalMarketPageGetV30DataMarkPageInfoStatus = 'MARKET_PAGE_ENABLE';

    public const ALLOWED_VALUES = [
        self::MARKET_PAGE_DISABLE_LocalMarketPageGetV30DataMarkPageInfoStatus,
        self::MARKET_PAGE_ENABLE_LocalMarketPageGetV30DataMarkPageInfoStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalMarketPageGetV30DataMarkPageInfoStatus', $value));
        }
        return (string) $value;
    }
}
