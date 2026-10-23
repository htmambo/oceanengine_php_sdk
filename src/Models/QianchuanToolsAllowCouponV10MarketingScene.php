<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanToolsAllowCouponV10MarketingScene
{
    public const ALL_QianchuanToolsAllowCouponV10MarketingScene = 'ALL';
    public const FEED_QianchuanToolsAllowCouponV10MarketingScene = 'FEED';
    public const SEARCH_QianchuanToolsAllowCouponV10MarketingScene = 'SEARCH';
    public const SHOPPING_MALL_QianchuanToolsAllowCouponV10MarketingScene = 'SHOPPING_MALL';

    public const ALLOWED_VALUES = [
        self::ALL_QianchuanToolsAllowCouponV10MarketingScene,
        self::FEED_QianchuanToolsAllowCouponV10MarketingScene,
        self::SEARCH_QianchuanToolsAllowCouponV10MarketingScene,
        self::SHOPPING_MALL_QianchuanToolsAllowCouponV10MarketingScene,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanToolsAllowCouponV10MarketingScene', $value));
        }
        return (string) $value;
    }
}
