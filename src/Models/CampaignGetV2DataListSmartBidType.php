<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CampaignGetV2DataListSmartBidType
{
    public const SMART_BID_NO_BID_CampaignGetV2DataListSmartBidType = 'SMART_BID_NO_BID';
    public const CUSTOM_CampaignGetV2DataListSmartBidType = 'CUSTOM';
    public const MAX_CONVERSION_CampaignGetV2DataListSmartBidType = 'MAX_CONVERSION';
    public const GUARANTEED_SHOW_CampaignGetV2DataListSmartBidType = 'GUARANTEED_SHOW';
    public const JIJIN_CampaignGetV2DataListSmartBidType = 'JIJIN';
    public const MAXCV_CampaignGetV2DataListSmartBidType = 'MAXCV';
    public const AWEME_LITE_PACING_CampaignGetV2DataListSmartBidType = 'AWEME_LITE_PACING';
    public const LITE_PACING_CampaignGetV2DataListSmartBidType = 'LITE_PACING';
    public const GD_PROMOTE_CampaignGetV2DataListSmartBidType = 'GD_PROMOTE';
    public const BAOSHOU_CampaignGetV2DataListSmartBidType = 'BAOSHOU';

    public const ALLOWED_VALUES = [
        self::SMART_BID_NO_BID_CampaignGetV2DataListSmartBidType,
        self::CUSTOM_CampaignGetV2DataListSmartBidType,
        self::MAX_CONVERSION_CampaignGetV2DataListSmartBidType,
        self::GUARANTEED_SHOW_CampaignGetV2DataListSmartBidType,
        self::JIJIN_CampaignGetV2DataListSmartBidType,
        self::MAXCV_CampaignGetV2DataListSmartBidType,
        self::AWEME_LITE_PACING_CampaignGetV2DataListSmartBidType,
        self::LITE_PACING_CampaignGetV2DataListSmartBidType,
        self::GD_PROMOTE_CampaignGetV2DataListSmartBidType,
        self::BAOSHOU_CampaignGetV2DataListSmartBidType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CampaignGetV2DataListSmartBidType', $value));
        }
        return (string) $value;
    }
}
