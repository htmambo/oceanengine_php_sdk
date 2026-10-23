<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StarReportCustomDataTopicReportV2DataDataDataTopic
{
    public const BASIC_DATA_StarReportCustomDataTopicReportV2DataDataDataTopic = 'BASIC_DATA';
    public const COMMENT_DATA_StarReportCustomDataTopicReportV2DataDataDataTopic = 'COMMENT_DATA';
    public const CONVERT_DATA_StarReportCustomDataTopicReportV2DataDataDataTopic = 'CONVERT_DATA';
    public const DY_SHOP_DATA_StarReportCustomDataTopicReportV2DataDataDataTopic = 'DY_SHOP_DATA';
    public const FLOW_DATA_StarReportCustomDataTopicReportV2DataDataDataTopic = 'FLOW_DATA';
    public const INDEX_SCORE_DATA_StarReportCustomDataTopicReportV2DataDataDataTopic = 'INDEX_SCORE_DATA';
    public const RECOMMEND_DATA_StarReportCustomDataTopicReportV2DataDataDataTopic = 'RECOMMEND_DATA';
    public const SEARCH_DATA_StarReportCustomDataTopicReportV2DataDataDataTopic = 'SEARCH_DATA';
    public const USER_DISTRIBUTION_DATA_StarReportCustomDataTopicReportV2DataDataDataTopic = 'USER_DISTRIBUTION_DATA';

    public const ALLOWED_VALUES = [
        self::BASIC_DATA_StarReportCustomDataTopicReportV2DataDataDataTopic,
        self::COMMENT_DATA_StarReportCustomDataTopicReportV2DataDataDataTopic,
        self::CONVERT_DATA_StarReportCustomDataTopicReportV2DataDataDataTopic,
        self::DY_SHOP_DATA_StarReportCustomDataTopicReportV2DataDataDataTopic,
        self::FLOW_DATA_StarReportCustomDataTopicReportV2DataDataDataTopic,
        self::INDEX_SCORE_DATA_StarReportCustomDataTopicReportV2DataDataDataTopic,
        self::RECOMMEND_DATA_StarReportCustomDataTopicReportV2DataDataDataTopic,
        self::SEARCH_DATA_StarReportCustomDataTopicReportV2DataDataDataTopic,
        self::USER_DISTRIBUTION_DATA_StarReportCustomDataTopicReportV2DataDataDataTopic,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StarReportCustomDataTopicReportV2DataDataDataTopic', $value));
        }
        return (string) $value;
    }
}
