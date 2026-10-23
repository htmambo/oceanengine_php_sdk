<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StarReportCustomDataTopicDailyReportV2DataStatsDataDataTopic
{
    public const BASIC_DATA_StarReportCustomDataTopicDailyReportV2DataStatsDataDataTopic = 'BASIC_DATA';
    public const COMMENT_DATA_StarReportCustomDataTopicDailyReportV2DataStatsDataDataTopic = 'COMMENT_DATA';
    public const CONVERT_DATA_StarReportCustomDataTopicDailyReportV2DataStatsDataDataTopic = 'CONVERT_DATA';
    public const DY_SHOP_DATA_StarReportCustomDataTopicDailyReportV2DataStatsDataDataTopic = 'DY_SHOP_DATA';
    public const FLOW_DATA_StarReportCustomDataTopicDailyReportV2DataStatsDataDataTopic = 'FLOW_DATA';
    public const INDEX_SCORE_DATA_StarReportCustomDataTopicDailyReportV2DataStatsDataDataTopic = 'INDEX_SCORE_DATA';
    public const RECOMMEND_DATA_StarReportCustomDataTopicDailyReportV2DataStatsDataDataTopic = 'RECOMMEND_DATA';
    public const SEARCH_DATA_StarReportCustomDataTopicDailyReportV2DataStatsDataDataTopic = 'SEARCH_DATA';
    public const USER_DISTRIBUTION_DATA_StarReportCustomDataTopicDailyReportV2DataStatsDataDataTopic = 'USER_DISTRIBUTION_DATA';

    public const ALLOWED_VALUES = [
        self::BASIC_DATA_StarReportCustomDataTopicDailyReportV2DataStatsDataDataTopic,
        self::COMMENT_DATA_StarReportCustomDataTopicDailyReportV2DataStatsDataDataTopic,
        self::CONVERT_DATA_StarReportCustomDataTopicDailyReportV2DataStatsDataDataTopic,
        self::DY_SHOP_DATA_StarReportCustomDataTopicDailyReportV2DataStatsDataDataTopic,
        self::FLOW_DATA_StarReportCustomDataTopicDailyReportV2DataStatsDataDataTopic,
        self::INDEX_SCORE_DATA_StarReportCustomDataTopicDailyReportV2DataStatsDataDataTopic,
        self::RECOMMEND_DATA_StarReportCustomDataTopicDailyReportV2DataStatsDataDataTopic,
        self::SEARCH_DATA_StarReportCustomDataTopicDailyReportV2DataStatsDataDataTopic,
        self::USER_DISTRIBUTION_DATA_StarReportCustomDataTopicDailyReportV2DataStatsDataDataTopic,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StarReportCustomDataTopicDailyReportV2DataStatsDataDataTopic', $value));
        }
        return (string) $value;
    }
}
