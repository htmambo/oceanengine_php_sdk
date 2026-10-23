<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportCampaignGetV2TimeGranularity
{
    public const STAT_TIME_GRANULARITY_MONTH_ReportCampaignGetV2TimeGranularity = 'STAT_TIME_GRANULARITY_MONTH';
    public const STAT_TIME_GRANULARITY_WEEK_ReportCampaignGetV2TimeGranularity = 'STAT_TIME_GRANULARITY_WEEK';
    public const STAT_TIME_GRANULARITY_DAILY_ReportCampaignGetV2TimeGranularity = 'STAT_TIME_GRANULARITY_DAILY';
    public const STAT_TIME_GRANULARITY_HOURLY_ReportCampaignGetV2TimeGranularity = 'STAT_TIME_GRANULARITY_HOURLY';

    public const ALLOWED_VALUES = [
        self::STAT_TIME_GRANULARITY_MONTH_ReportCampaignGetV2TimeGranularity,
        self::STAT_TIME_GRANULARITY_WEEK_ReportCampaignGetV2TimeGranularity,
        self::STAT_TIME_GRANULARITY_DAILY_ReportCampaignGetV2TimeGranularity,
        self::STAT_TIME_GRANULARITY_HOURLY_ReportCampaignGetV2TimeGranularity,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportCampaignGetV2TimeGranularity', $value));
        }
        return (string) $value;
    }
}
