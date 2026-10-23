<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanCampaignCreateV10MarketingScene
{
    public const FEED_QianchuanCampaignCreateV10MarketingScene = 'FEED';
    public const SEARCH_QianchuanCampaignCreateV10MarketingScene = 'SEARCH';
    public const SHOPPING_MALL_QianchuanCampaignCreateV10MarketingScene = 'SHOPPING_MALL';

    public const ALLOWED_VALUES = [
        self::FEED_QianchuanCampaignCreateV10MarketingScene,
        self::SEARCH_QianchuanCampaignCreateV10MarketingScene,
        self::SHOPPING_MALL_QianchuanCampaignCreateV10MarketingScene,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanCampaignCreateV10MarketingScene', $value));
        }
        return (string) $value;
    }
}
