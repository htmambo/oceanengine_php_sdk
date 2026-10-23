<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CampaignCreateV2LandingType
{
    public const LIVE_CampaignCreateV2LandingType = 'LIVE';
    public const APP_CampaignCreateV2LandingType = 'APP';
    public const ARTICLE_CampaignCreateV2LandingType = 'ARTICLE';
    public const SHOP_CampaignCreateV2LandingType = 'SHOP';
    public const QUICK_APP_CampaignCreateV2LandingType = 'QUICK_APP';
    public const BRAND_EXTERNAL_CampaignCreateV2LandingType = 'BRAND_EXTERNAL';
    public const LINK_CampaignCreateV2LandingType = 'LINK';
    public const DPA_CampaignCreateV2LandingType = 'DPA';
    public const STORE_CampaignCreateV2LandingType = 'STORE';
    public const AWEME_CampaignCreateV2LandingType = 'AWEME';
    public const GOODS_CampaignCreateV2LandingType = 'GOODS';

    public const ALLOWED_VALUES = [
        self::LIVE_CampaignCreateV2LandingType,
        self::APP_CampaignCreateV2LandingType,
        self::ARTICLE_CampaignCreateV2LandingType,
        self::SHOP_CampaignCreateV2LandingType,
        self::QUICK_APP_CampaignCreateV2LandingType,
        self::BRAND_EXTERNAL_CampaignCreateV2LandingType,
        self::LINK_CampaignCreateV2LandingType,
        self::DPA_CampaignCreateV2LandingType,
        self::STORE_CampaignCreateV2LandingType,
        self::AWEME_CampaignCreateV2LandingType,
        self::GOODS_CampaignCreateV2LandingType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CampaignCreateV2LandingType', $value));
        }
        return (string) $value;
    }
}
