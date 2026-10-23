<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanProductAvailableGetV10FilterMarketingScene
{
    public const FEED_QianchuanProductAvailableGetV10FilterMarketingScene = 'FEED';
    public const SEARCH_QianchuanProductAvailableGetV10FilterMarketingScene = 'SEARCH';
    public const SHOPPING_MALL_QianchuanProductAvailableGetV10FilterMarketingScene = 'SHOPPING_MALL';

    public const ALLOWED_VALUES = [
        self::FEED_QianchuanProductAvailableGetV10FilterMarketingScene,
        self::SEARCH_QianchuanProductAvailableGetV10FilterMarketingScene,
        self::SHOPPING_MALL_QianchuanProductAvailableGetV10FilterMarketingScene,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanProductAvailableGetV10FilterMarketingScene', $value));
        }
        return (string) $value;
    }
}
