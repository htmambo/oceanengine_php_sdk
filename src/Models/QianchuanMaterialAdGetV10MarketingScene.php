<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanMaterialAdGetV10MarketingScene
{
    public const FEED_QianchuanMaterialAdGetV10MarketingScene = 'FEED';
    public const SEARCH_QianchuanMaterialAdGetV10MarketingScene = 'SEARCH';
    public const SHOPPING_MALL_QianchuanMaterialAdGetV10MarketingScene = 'SHOPPING_MALL';

    public const ALLOWED_VALUES = [
        self::FEED_QianchuanMaterialAdGetV10MarketingScene,
        self::SEARCH_QianchuanMaterialAdGetV10MarketingScene,
        self::SHOPPING_MALL_QianchuanMaterialAdGetV10MarketingScene,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanMaterialAdGetV10MarketingScene', $value));
        }
        return (string) $value;
    }
}
