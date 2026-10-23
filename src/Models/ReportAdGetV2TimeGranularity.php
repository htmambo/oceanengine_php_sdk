<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportAdGetV2TimeGranularity
{
    public const STAT_TIME_GRANULARITY_MONTH_ReportAdGetV2TimeGranularity = 'STAT_TIME_GRANULARITY_MONTH';
    public const STAT_TIME_GRANULARITY_WEEK_ReportAdGetV2TimeGranularity = 'STAT_TIME_GRANULARITY_WEEK';
    public const STAT_TIME_GRANULARITY_DAILY_ReportAdGetV2TimeGranularity = 'STAT_TIME_GRANULARITY_DAILY';
    public const STAT_TIME_GRANULARITY_HOURLY_ReportAdGetV2TimeGranularity = 'STAT_TIME_GRANULARITY_HOURLY';

    public const ALLOWED_VALUES = [
        self::STAT_TIME_GRANULARITY_MONTH_ReportAdGetV2TimeGranularity,
        self::STAT_TIME_GRANULARITY_WEEK_ReportAdGetV2TimeGranularity,
        self::STAT_TIME_GRANULARITY_DAILY_ReportAdGetV2TimeGranularity,
        self::STAT_TIME_GRANULARITY_HOURLY_ReportAdGetV2TimeGranularity,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportAdGetV2TimeGranularity', $value));
        }
        return (string) $value;
    }
}
