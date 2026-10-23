<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdDetailGetV10DataMarketingScene
{
    public const ALL_QianchuanAdDetailGetV10DataMarketingScene = 'ALL';
    public const FEED_QianchuanAdDetailGetV10DataMarketingScene = 'FEED';
    public const SEARCH_QianchuanAdDetailGetV10DataMarketingScene = 'SEARCH';
    public const SHOPPING_MALL_QianchuanAdDetailGetV10DataMarketingScene = 'SHOPPING_MALL';

    public const ALLOWED_VALUES = [
        self::ALL_QianchuanAdDetailGetV10DataMarketingScene,
        self::FEED_QianchuanAdDetailGetV10DataMarketingScene,
        self::SEARCH_QianchuanAdDetailGetV10DataMarketingScene,
        self::SHOPPING_MALL_QianchuanAdDetailGetV10DataMarketingScene,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdDetailGetV10DataMarketingScene', $value));
        }
        return (string) $value;
    }
}
