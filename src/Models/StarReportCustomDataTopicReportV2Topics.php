<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StarReportCustomDataTopicReportV2Topics
{
    public const BASIC_DATA_StarReportCustomDataTopicReportV2Topics = 'BASIC_DATA';
    public const COMMENT_DATA_StarReportCustomDataTopicReportV2Topics = 'COMMENT_DATA';
    public const CONVERT_DATA_StarReportCustomDataTopicReportV2Topics = 'CONVERT_DATA';
    public const DY_SHOP_DATA_StarReportCustomDataTopicReportV2Topics = 'DY_SHOP_DATA';
    public const FLOW_DATA_StarReportCustomDataTopicReportV2Topics = 'FLOW_DATA';
    public const INDEX_SCORE_DATA_StarReportCustomDataTopicReportV2Topics = 'INDEX_SCORE_DATA';
    public const RECOMMEND_DATA_StarReportCustomDataTopicReportV2Topics = 'RECOMMEND_DATA';
    public const SEARCH_DATA_StarReportCustomDataTopicReportV2Topics = 'SEARCH_DATA';
    public const USER_DISTRIBUTION_DATA_StarReportCustomDataTopicReportV2Topics = 'USER_DISTRIBUTION_DATA';

    public const ALLOWED_VALUES = [
        self::BASIC_DATA_StarReportCustomDataTopicReportV2Topics,
        self::COMMENT_DATA_StarReportCustomDataTopicReportV2Topics,
        self::CONVERT_DATA_StarReportCustomDataTopicReportV2Topics,
        self::DY_SHOP_DATA_StarReportCustomDataTopicReportV2Topics,
        self::FLOW_DATA_StarReportCustomDataTopicReportV2Topics,
        self::INDEX_SCORE_DATA_StarReportCustomDataTopicReportV2Topics,
        self::RECOMMEND_DATA_StarReportCustomDataTopicReportV2Topics,
        self::SEARCH_DATA_StarReportCustomDataTopicReportV2Topics,
        self::USER_DISTRIBUTION_DATA_StarReportCustomDataTopicReportV2Topics,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StarReportCustomDataTopicReportV2Topics', $value));
        }
        return (string) $value;
    }
}
