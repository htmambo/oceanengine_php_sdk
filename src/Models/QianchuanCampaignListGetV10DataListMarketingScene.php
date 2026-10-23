<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanCampaignListGetV10DataListMarketingScene
{
    public const ALL_QianchuanCampaignListGetV10DataListMarketingScene = 'ALL';
    public const FEED_QianchuanCampaignListGetV10DataListMarketingScene = 'FEED';
    public const SEARCH_QianchuanCampaignListGetV10DataListMarketingScene = 'SEARCH';
    public const SHOPPING_MALL_QianchuanCampaignListGetV10DataListMarketingScene = 'SHOPPING_MALL';

    public const ALLOWED_VALUES = [
        self::ALL_QianchuanCampaignListGetV10DataListMarketingScene,
        self::FEED_QianchuanCampaignListGetV10DataListMarketingScene,
        self::SEARCH_QianchuanCampaignListGetV10DataListMarketingScene,
        self::SHOPPING_MALL_QianchuanCampaignListGetV10DataListMarketingScene,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanCampaignListGetV10DataListMarketingScene', $value));
        }
        return (string) $value;
    }
}
