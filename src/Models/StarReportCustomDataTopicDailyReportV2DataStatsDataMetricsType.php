<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StarReportCustomDataTopicDailyReportV2DataStatsDataMetricsType
{
    public const FLOAT64_StarReportCustomDataTopicDailyReportV2DataStatsDataMetricsType = 'FLOAT64';
    public const INT64_StarReportCustomDataTopicDailyReportV2DataStatsDataMetricsType = 'INT64';
    public const JSON_StarReportCustomDataTopicDailyReportV2DataStatsDataMetricsType = 'JSON';
    public const STRING_StarReportCustomDataTopicDailyReportV2DataStatsDataMetricsType = 'STRING';

    public const ALLOWED_VALUES = [
        self::FLOAT64_StarReportCustomDataTopicDailyReportV2DataStatsDataMetricsType,
        self::INT64_StarReportCustomDataTopicDailyReportV2DataStatsDataMetricsType,
        self::JSON_StarReportCustomDataTopicDailyReportV2DataStatsDataMetricsType,
        self::STRING_StarReportCustomDataTopicDailyReportV2DataStatsDataMetricsType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StarReportCustomDataTopicDailyReportV2DataStatsDataMetricsType', $value));
        }
        return (string) $value;
    }
}
