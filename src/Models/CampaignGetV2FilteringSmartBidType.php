<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CampaignGetV2FilteringSmartBidType
{
    public const SMART_BID_NO_BID_CampaignGetV2FilteringSmartBidType = 'SMART_BID_NO_BID';
    public const CUSTOM_CampaignGetV2FilteringSmartBidType = 'CUSTOM';
    public const MAX_CONVERSION_CampaignGetV2FilteringSmartBidType = 'MAX_CONVERSION';
    public const GUARANTEED_SHOW_CampaignGetV2FilteringSmartBidType = 'GUARANTEED_SHOW';
    public const JIJIN_CampaignGetV2FilteringSmartBidType = 'JIJIN';
    public const MAXCV_CampaignGetV2FilteringSmartBidType = 'MAXCV';
    public const AWEME_LITE_PACING_CampaignGetV2FilteringSmartBidType = 'AWEME_LITE_PACING';
    public const LITE_PACING_CampaignGetV2FilteringSmartBidType = 'LITE_PACING';
    public const GD_PROMOTE_CampaignGetV2FilteringSmartBidType = 'GD_PROMOTE';
    public const BAOSHOU_CampaignGetV2FilteringSmartBidType = 'BAOSHOU';

    public const ALLOWED_VALUES = [
        self::SMART_BID_NO_BID_CampaignGetV2FilteringSmartBidType,
        self::CUSTOM_CampaignGetV2FilteringSmartBidType,
        self::MAX_CONVERSION_CampaignGetV2FilteringSmartBidType,
        self::GUARANTEED_SHOW_CampaignGetV2FilteringSmartBidType,
        self::JIJIN_CampaignGetV2FilteringSmartBidType,
        self::MAXCV_CampaignGetV2FilteringSmartBidType,
        self::AWEME_LITE_PACING_CampaignGetV2FilteringSmartBidType,
        self::LITE_PACING_CampaignGetV2FilteringSmartBidType,
        self::GD_PROMOTE_CampaignGetV2FilteringSmartBidType,
        self::BAOSHOU_CampaignGetV2FilteringSmartBidType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CampaignGetV2FilteringSmartBidType', $value));
        }
        return (string) $value;
    }
}
