<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdGetV10DataListMarketingScene
{
    public const ALL_QianchuanAdGetV10DataListMarketingScene = 'ALL';
    public const FEED_QianchuanAdGetV10DataListMarketingScene = 'FEED';
    public const SEARCH_QianchuanAdGetV10DataListMarketingScene = 'SEARCH';
    public const SHOPPING_MALL_QianchuanAdGetV10DataListMarketingScene = 'SHOPPING_MALL';

    public const ALLOWED_VALUES = [
        self::ALL_QianchuanAdGetV10DataListMarketingScene,
        self::FEED_QianchuanAdGetV10DataListMarketingScene,
        self::SEARCH_QianchuanAdGetV10DataListMarketingScene,
        self::SHOPPING_MALL_QianchuanAdGetV10DataListMarketingScene,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdGetV10DataListMarketingScene', $value));
        }
        return (string) $value;
    }
}
