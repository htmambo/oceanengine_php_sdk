<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdGetV10FilteringMarketingScene
{
    public const ALL_QianchuanAdGetV10FilteringMarketingScene = 'ALL';
    public const FEED_QianchuanAdGetV10FilteringMarketingScene = 'FEED';
    public const SEARCH_QianchuanAdGetV10FilteringMarketingScene = 'SEARCH';
    public const SHOPPING_MALL_QianchuanAdGetV10FilteringMarketingScene = 'SHOPPING_MALL';

    public const ALLOWED_VALUES = [
        self::ALL_QianchuanAdGetV10FilteringMarketingScene,
        self::FEED_QianchuanAdGetV10FilteringMarketingScene,
        self::SEARCH_QianchuanAdGetV10FilteringMarketingScene,
        self::SHOPPING_MALL_QianchuanAdGetV10FilteringMarketingScene,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdGetV10FilteringMarketingScene', $value));
        }
        return (string) $value;
    }
}
