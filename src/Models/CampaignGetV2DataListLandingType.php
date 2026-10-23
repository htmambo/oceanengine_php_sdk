<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CampaignGetV2DataListLandingType
{
    public const LIVE_CampaignGetV2DataListLandingType = 'LIVE';
    public const APP_CampaignGetV2DataListLandingType = 'APP';
    public const ARTICLE_CampaignGetV2DataListLandingType = 'ARTICLE';
    public const SHOP_CampaignGetV2DataListLandingType = 'SHOP';
    public const QUICK_APP_CampaignGetV2DataListLandingType = 'QUICK_APP';
    public const BRAND_EXTERNAL_CampaignGetV2DataListLandingType = 'BRAND_EXTERNAL';
    public const LINK_CampaignGetV2DataListLandingType = 'LINK';
    public const DPA_CampaignGetV2DataListLandingType = 'DPA';
    public const STORE_CampaignGetV2DataListLandingType = 'STORE';
    public const AWEME_CampaignGetV2DataListLandingType = 'AWEME';
    public const GOODS_CampaignGetV2DataListLandingType = 'GOODS';

    public const ALLOWED_VALUES = [
        self::LIVE_CampaignGetV2DataListLandingType,
        self::APP_CampaignGetV2DataListLandingType,
        self::ARTICLE_CampaignGetV2DataListLandingType,
        self::SHOP_CampaignGetV2DataListLandingType,
        self::QUICK_APP_CampaignGetV2DataListLandingType,
        self::BRAND_EXTERNAL_CampaignGetV2DataListLandingType,
        self::LINK_CampaignGetV2DataListLandingType,
        self::DPA_CampaignGetV2DataListLandingType,
        self::STORE_CampaignGetV2DataListLandingType,
        self::AWEME_CampaignGetV2DataListLandingType,
        self::GOODS_CampaignGetV2DataListLandingType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CampaignGetV2DataListLandingType', $value));
        }
        return (string) $value;
    }
}
