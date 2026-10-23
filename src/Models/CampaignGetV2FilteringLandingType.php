<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CampaignGetV2FilteringLandingType
{
    public const LIVE_CampaignGetV2FilteringLandingType = 'LIVE';
    public const APP_CampaignGetV2FilteringLandingType = 'APP';
    public const ARTICLE_CampaignGetV2FilteringLandingType = 'ARTICLE';
    public const SHOP_CampaignGetV2FilteringLandingType = 'SHOP';
    public const QUICK_APP_CampaignGetV2FilteringLandingType = 'QUICK_APP';
    public const BRAND_EXTERNAL_CampaignGetV2FilteringLandingType = 'BRAND_EXTERNAL';
    public const LINK_CampaignGetV2FilteringLandingType = 'LINK';
    public const DPA_CampaignGetV2FilteringLandingType = 'DPA';
    public const STORE_CampaignGetV2FilteringLandingType = 'STORE';
    public const AWEME_CampaignGetV2FilteringLandingType = 'AWEME';
    public const GOODS_CampaignGetV2FilteringLandingType = 'GOODS';

    public const ALLOWED_VALUES = [
        self::LIVE_CampaignGetV2FilteringLandingType,
        self::APP_CampaignGetV2FilteringLandingType,
        self::ARTICLE_CampaignGetV2FilteringLandingType,
        self::SHOP_CampaignGetV2FilteringLandingType,
        self::QUICK_APP_CampaignGetV2FilteringLandingType,
        self::BRAND_EXTERNAL_CampaignGetV2FilteringLandingType,
        self::LINK_CampaignGetV2FilteringLandingType,
        self::DPA_CampaignGetV2FilteringLandingType,
        self::STORE_CampaignGetV2FilteringLandingType,
        self::AWEME_CampaignGetV2FilteringLandingType,
        self::GOODS_CampaignGetV2FilteringLandingType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CampaignGetV2FilteringLandingType', $value));
        }
        return (string) $value;
    }
}
