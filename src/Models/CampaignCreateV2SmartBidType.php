<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CampaignCreateV2SmartBidType
{
    public const SMART_BID_NO_BID_CampaignCreateV2SmartBidType = 'SMART_BID_NO_BID';
    public const CUSTOM_CampaignCreateV2SmartBidType = 'CUSTOM';
    public const MAX_CONVERSION_CampaignCreateV2SmartBidType = 'MAX_CONVERSION';
    public const GUARANTEED_SHOW_CampaignCreateV2SmartBidType = 'GUARANTEED_SHOW';
    public const JIJIN_CampaignCreateV2SmartBidType = 'JIJIN';
    public const MAXCV_CampaignCreateV2SmartBidType = 'MAXCV';
    public const AWEME_LITE_PACING_CampaignCreateV2SmartBidType = 'AWEME_LITE_PACING';
    public const LITE_PACING_CampaignCreateV2SmartBidType = 'LITE_PACING';
    public const GD_PROMOTE_CampaignCreateV2SmartBidType = 'GD_PROMOTE';
    public const BAOSHOU_CampaignCreateV2SmartBidType = 'BAOSHOU';

    public const ALLOWED_VALUES = [
        self::SMART_BID_NO_BID_CampaignCreateV2SmartBidType,
        self::CUSTOM_CampaignCreateV2SmartBidType,
        self::MAX_CONVERSION_CampaignCreateV2SmartBidType,
        self::GUARANTEED_SHOW_CampaignCreateV2SmartBidType,
        self::JIJIN_CampaignCreateV2SmartBidType,
        self::MAXCV_CampaignCreateV2SmartBidType,
        self::AWEME_LITE_PACING_CampaignCreateV2SmartBidType,
        self::LITE_PACING_CampaignCreateV2SmartBidType,
        self::GD_PROMOTE_CampaignCreateV2SmartBidType,
        self::BAOSHOU_CampaignCreateV2SmartBidType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CampaignCreateV2SmartBidType', $value));
        }
        return (string) $value;
    }
}
