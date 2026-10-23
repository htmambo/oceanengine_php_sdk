<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanLqAdGetV10FilteringMarketingScene
{
    public const ALL_QianchuanLqAdGetV10FilteringMarketingScene = 'ALL';
    public const FEED_QianchuanLqAdGetV10FilteringMarketingScene = 'FEED';
    public const SEARCH_QianchuanLqAdGetV10FilteringMarketingScene = 'SEARCH';
    public const SHOPPING_MALL_QianchuanLqAdGetV10FilteringMarketingScene = 'SHOPPING_MALL';

    public const ALLOWED_VALUES = [
        self::ALL_QianchuanLqAdGetV10FilteringMarketingScene,
        self::FEED_QianchuanLqAdGetV10FilteringMarketingScene,
        self::SEARCH_QianchuanLqAdGetV10FilteringMarketingScene,
        self::SHOPPING_MALL_QianchuanLqAdGetV10FilteringMarketingScene,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanLqAdGetV10FilteringMarketingScene', $value));
        }
        return (string) $value;
    }
}
