<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportCampaignGetV2DataListLandingType
{
    public const LIVE_ReportCampaignGetV2DataListLandingType = 'LIVE';
    public const APP_ReportCampaignGetV2DataListLandingType = 'APP';
    public const ARTICLE_ReportCampaignGetV2DataListLandingType = 'ARTICLE';
    public const SHOP_ReportCampaignGetV2DataListLandingType = 'SHOP';
    public const QUICK_APP_ReportCampaignGetV2DataListLandingType = 'QUICK_APP';
    public const LINK_ReportCampaignGetV2DataListLandingType = 'LINK';
    public const DPA_ReportCampaignGetV2DataListLandingType = 'DPA';
    public const STORE_ReportCampaignGetV2DataListLandingType = 'STORE';
    public const AWEME_ReportCampaignGetV2DataListLandingType = 'AWEME';
    public const GOODS_ReportCampaignGetV2DataListLandingType = 'GOODS';

    public const ALLOWED_VALUES = [
        self::LIVE_ReportCampaignGetV2DataListLandingType,
        self::APP_ReportCampaignGetV2DataListLandingType,
        self::ARTICLE_ReportCampaignGetV2DataListLandingType,
        self::SHOP_ReportCampaignGetV2DataListLandingType,
        self::QUICK_APP_ReportCampaignGetV2DataListLandingType,
        self::LINK_ReportCampaignGetV2DataListLandingType,
        self::DPA_ReportCampaignGetV2DataListLandingType,
        self::STORE_ReportCampaignGetV2DataListLandingType,
        self::AWEME_ReportCampaignGetV2DataListLandingType,
        self::GOODS_ReportCampaignGetV2DataListLandingType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportCampaignGetV2DataListLandingType', $value));
        }
        return (string) $value;
    }
}
