<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanMaterialGetV10MarketingScene
{
    public const FEED_QianchuanMaterialGetV10MarketingScene = 'FEED';
    public const SEARCH_QianchuanMaterialGetV10MarketingScene = 'SEARCH';
    public const SHOPPING_MALL_QianchuanMaterialGetV10MarketingScene = 'SHOPPING_MALL';

    public const ALLOWED_VALUES = [
        self::FEED_QianchuanMaterialGetV10MarketingScene,
        self::SEARCH_QianchuanMaterialGetV10MarketingScene,
        self::SHOPPING_MALL_QianchuanMaterialGetV10MarketingScene,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanMaterialGetV10MarketingScene', $value));
        }
        return (string) $value;
    }
}
