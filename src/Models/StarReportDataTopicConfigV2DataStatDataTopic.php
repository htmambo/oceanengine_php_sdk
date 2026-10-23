<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StarReportDataTopicConfigV2DataStatDataTopic
{
    public const BASIC_DATA_StarReportDataTopicConfigV2DataStatDataTopic = 'BASIC_DATA';
    public const COMMENT_DATA_StarReportDataTopicConfigV2DataStatDataTopic = 'COMMENT_DATA';
    public const CONVERT_DATA_StarReportDataTopicConfigV2DataStatDataTopic = 'CONVERT_DATA';
    public const DY_SHOP_DATA_StarReportDataTopicConfigV2DataStatDataTopic = 'DY_SHOP_DATA';
    public const FLOW_DATA_StarReportDataTopicConfigV2DataStatDataTopic = 'FLOW_DATA';
    public const INDEX_SCORE_DATA_StarReportDataTopicConfigV2DataStatDataTopic = 'INDEX_SCORE_DATA';
    public const RECOMMEND_DATA_StarReportDataTopicConfigV2DataStatDataTopic = 'RECOMMEND_DATA';
    public const SEARCH_DATA_StarReportDataTopicConfigV2DataStatDataTopic = 'SEARCH_DATA';
    public const USER_DISTRIBUTION_DATA_StarReportDataTopicConfigV2DataStatDataTopic = 'USER_DISTRIBUTION_DATA';

    public const ALLOWED_VALUES = [
        self::BASIC_DATA_StarReportDataTopicConfigV2DataStatDataTopic,
        self::COMMENT_DATA_StarReportDataTopicConfigV2DataStatDataTopic,
        self::CONVERT_DATA_StarReportDataTopicConfigV2DataStatDataTopic,
        self::DY_SHOP_DATA_StarReportDataTopicConfigV2DataStatDataTopic,
        self::FLOW_DATA_StarReportDataTopicConfigV2DataStatDataTopic,
        self::INDEX_SCORE_DATA_StarReportDataTopicConfigV2DataStatDataTopic,
        self::RECOMMEND_DATA_StarReportDataTopicConfigV2DataStatDataTopic,
        self::SEARCH_DATA_StarReportDataTopicConfigV2DataStatDataTopic,
        self::USER_DISTRIBUTION_DATA_StarReportDataTopicConfigV2DataStatDataTopic,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StarReportDataTopicConfigV2DataStatDataTopic', $value));
        }
        return (string) $value;
    }
}
