<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportCampaignGetV2FilteringLandingTypes
{
    public const LIVE_ReportCampaignGetV2FilteringLandingTypes = 'LIVE';
    public const APP_ReportCampaignGetV2FilteringLandingTypes = 'APP';
    public const ARTICLE_ReportCampaignGetV2FilteringLandingTypes = 'ARTICLE';
    public const SHOP_ReportCampaignGetV2FilteringLandingTypes = 'SHOP';
    public const QUICK_APP_ReportCampaignGetV2FilteringLandingTypes = 'QUICK_APP';
    public const LINK_ReportCampaignGetV2FilteringLandingTypes = 'LINK';
    public const DPA_ReportCampaignGetV2FilteringLandingTypes = 'DPA';
    public const STORE_ReportCampaignGetV2FilteringLandingTypes = 'STORE';
    public const AWEME_ReportCampaignGetV2FilteringLandingTypes = 'AWEME';
    public const GOODS_ReportCampaignGetV2FilteringLandingTypes = 'GOODS';

    public const ALLOWED_VALUES = [
        self::LIVE_ReportCampaignGetV2FilteringLandingTypes,
        self::APP_ReportCampaignGetV2FilteringLandingTypes,
        self::ARTICLE_ReportCampaignGetV2FilteringLandingTypes,
        self::SHOP_ReportCampaignGetV2FilteringLandingTypes,
        self::QUICK_APP_ReportCampaignGetV2FilteringLandingTypes,
        self::LINK_ReportCampaignGetV2FilteringLandingTypes,
        self::DPA_ReportCampaignGetV2FilteringLandingTypes,
        self::STORE_ReportCampaignGetV2FilteringLandingTypes,
        self::AWEME_ReportCampaignGetV2FilteringLandingTypes,
        self::GOODS_ReportCampaignGetV2FilteringLandingTypes,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportCampaignGetV2FilteringLandingTypes', $value));
        }
        return (string) $value;
    }
}
