<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CampaignGetV2FilteringStatus
{
    public const CAMPAIGN_STATUS_NOT_DELETE_CampaignGetV2FilteringStatus = 'CAMPAIGN_STATUS_NOT_DELETE';
    public const CAMPAIGN_STATUS_DELETE_CampaignGetV2FilteringStatus = 'CAMPAIGN_STATUS_DELETE';
    public const CAMPAIGN_STATUS_DISABLE_CampaignGetV2FilteringStatus = 'CAMPAIGN_STATUS_DISABLE';
    public const CAMPAIGN_STATUS_ALL_CampaignGetV2FilteringStatus = 'CAMPAIGN_STATUS_ALL';
    public const CAMPAIGN_STATUS_ENABLE_CampaignGetV2FilteringStatus = 'CAMPAIGN_STATUS_ENABLE';

    public const ALLOWED_VALUES = [
        self::CAMPAIGN_STATUS_NOT_DELETE_CampaignGetV2FilteringStatus,
        self::CAMPAIGN_STATUS_DELETE_CampaignGetV2FilteringStatus,
        self::CAMPAIGN_STATUS_DISABLE_CampaignGetV2FilteringStatus,
        self::CAMPAIGN_STATUS_ALL_CampaignGetV2FilteringStatus,
        self::CAMPAIGN_STATUS_ENABLE_CampaignGetV2FilteringStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CampaignGetV2FilteringStatus', $value));
        }
        return (string) $value;
    }
}
