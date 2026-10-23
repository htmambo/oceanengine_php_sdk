<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportCampaignGetV2FilteringStatus
{
    public const CAMPAIGN_STATUS_NOT_DELETE_ReportCampaignGetV2FilteringStatus = 'CAMPAIGN_STATUS_NOT_DELETE';
    public const CAMPAIGN_STATUS_ADVERTISER_BUDGET_EXCEED_ReportCampaignGetV2FilteringStatus = 'CAMPAIGN_STATUS_ADVERTISER_BUDGET_EXCEED';
    public const CAMPAIGN_STATUS_DELETE_ReportCampaignGetV2FilteringStatus = 'CAMPAIGN_STATUS_DELETE';
    public const CAMPAIGN_STATUS_DISABLE_ReportCampaignGetV2FilteringStatus = 'CAMPAIGN_STATUS_DISABLE';
    public const CAMPAIGN_STATUS_ALL_ReportCampaignGetV2FilteringStatus = 'CAMPAIGN_STATUS_ALL';
    public const CAMPAIGN_STATUS_ENABLE_ReportCampaignGetV2FilteringStatus = 'CAMPAIGN_STATUS_ENABLE';

    public const ALLOWED_VALUES = [
        self::CAMPAIGN_STATUS_NOT_DELETE_ReportCampaignGetV2FilteringStatus,
        self::CAMPAIGN_STATUS_ADVERTISER_BUDGET_EXCEED_ReportCampaignGetV2FilteringStatus,
        self::CAMPAIGN_STATUS_DELETE_ReportCampaignGetV2FilteringStatus,
        self::CAMPAIGN_STATUS_DISABLE_ReportCampaignGetV2FilteringStatus,
        self::CAMPAIGN_STATUS_ALL_ReportCampaignGetV2FilteringStatus,
        self::CAMPAIGN_STATUS_ENABLE_ReportCampaignGetV2FilteringStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportCampaignGetV2FilteringStatus', $value));
        }
        return (string) $value;
    }
}
