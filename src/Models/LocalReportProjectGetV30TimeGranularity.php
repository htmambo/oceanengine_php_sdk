<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalReportProjectGetV30TimeGranularity
{
    public const TIME_GRANULARITY_DAILY_LocalReportProjectGetV30TimeGranularity = 'TIME_GRANULARITY_DAILY';
    public const TIME_GRANULARITY_HOURLY_LocalReportProjectGetV30TimeGranularity = 'TIME_GRANULARITY_HOURLY';
    public const TIME_GRANULARITY_TOTAL_LocalReportProjectGetV30TimeGranularity = 'TIME_GRANULARITY_TOTAL';

    public const ALLOWED_VALUES = [
        self::TIME_GRANULARITY_DAILY_LocalReportProjectGetV30TimeGranularity,
        self::TIME_GRANULARITY_HOURLY_LocalReportProjectGetV30TimeGranularity,
        self::TIME_GRANULARITY_TOTAL_LocalReportProjectGetV30TimeGranularity,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalReportProjectGetV30TimeGranularity', $value));
        }
        return (string) $value;
    }
}
