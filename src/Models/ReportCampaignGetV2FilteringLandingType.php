<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportCampaignGetV2FilteringLandingType
{
    public const SHOP_ReportCampaignGetV2FilteringLandingType = 'SHOP';
    public const LIVE_ReportCampaignGetV2FilteringLandingType = 'LIVE';
    public const ARTICLE_ReportCampaignGetV2FilteringLandingType = 'ARTICLE';
    public const AWEME_ReportCampaignGetV2FilteringLandingType = 'AWEME';
    public const DPA_ReportCampaignGetV2FilteringLandingType = 'DPA';
    public const QUICK_APP_ReportCampaignGetV2FilteringLandingType = 'QUICK_APP';
    public const APP_ReportCampaignGetV2FilteringLandingType = 'APP';
    public const STORE_ReportCampaignGetV2FilteringLandingType = 'STORE';
    public const GOODS_ReportCampaignGetV2FilteringLandingType = 'GOODS';
    public const LINK_ReportCampaignGetV2FilteringLandingType = 'LINK';

    public const ALLOWED_VALUES = [
        self::SHOP_ReportCampaignGetV2FilteringLandingType,
        self::LIVE_ReportCampaignGetV2FilteringLandingType,
        self::ARTICLE_ReportCampaignGetV2FilteringLandingType,
        self::AWEME_ReportCampaignGetV2FilteringLandingType,
        self::DPA_ReportCampaignGetV2FilteringLandingType,
        self::QUICK_APP_ReportCampaignGetV2FilteringLandingType,
        self::APP_ReportCampaignGetV2FilteringLandingType,
        self::STORE_ReportCampaignGetV2FilteringLandingType,
        self::GOODS_ReportCampaignGetV2FilteringLandingType,
        self::LINK_ReportCampaignGetV2FilteringLandingType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportCampaignGetV2FilteringLandingType', $value));
        }
        return (string) $value;
    }
}
