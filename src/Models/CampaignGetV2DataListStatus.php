<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CampaignGetV2DataListStatus
{
    public const CAMPAIGN_STATUS_DELETE_CampaignGetV2DataListStatus = 'CAMPAIGN_STATUS_DELETE';
    public const CAMPAIGN_STATUS_DISABLE_CampaignGetV2DataListStatus = 'CAMPAIGN_STATUS_DISABLE';
    public const CAMPAIGN_STATUS_ADVERTISER_BUDGET_EXCEED_CampaignGetV2DataListStatus = 'CAMPAIGN_STATUS_ADVERTISER_BUDGET_EXCEED';
    public const CAMPAIGN_STATUS_ENABLE_CampaignGetV2DataListStatus = 'CAMPAIGN_STATUS_ENABLE';

    public const ALLOWED_VALUES = [
        self::CAMPAIGN_STATUS_DELETE_CampaignGetV2DataListStatus,
        self::CAMPAIGN_STATUS_DISABLE_CampaignGetV2DataListStatus,
        self::CAMPAIGN_STATUS_ADVERTISER_BUDGET_EXCEED_CampaignGetV2DataListStatus,
        self::CAMPAIGN_STATUS_ENABLE_CampaignGetV2DataListStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CampaignGetV2DataListStatus', $value));
        }
        return (string) $value;
    }
}
