<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StarReportDataTopicConfigV2Topics
{
    public const BASIC_DATA_StarReportDataTopicConfigV2Topics = 'BASIC_DATA';
    public const COMMENT_DATA_StarReportDataTopicConfigV2Topics = 'COMMENT_DATA';
    public const CONVERT_DATA_StarReportDataTopicConfigV2Topics = 'CONVERT_DATA';
    public const DY_SHOP_DATA_StarReportDataTopicConfigV2Topics = 'DY_SHOP_DATA';
    public const FLOW_DATA_StarReportDataTopicConfigV2Topics = 'FLOW_DATA';
    public const INDEX_SCORE_DATA_StarReportDataTopicConfigV2Topics = 'INDEX_SCORE_DATA';
    public const RECOMMEND_DATA_StarReportDataTopicConfigV2Topics = 'RECOMMEND_DATA';
    public const SEARCH_DATA_StarReportDataTopicConfigV2Topics = 'SEARCH_DATA';
    public const USER_DISTRIBUTION_DATA_StarReportDataTopicConfigV2Topics = 'USER_DISTRIBUTION_DATA';

    public const ALLOWED_VALUES = [
        self::BASIC_DATA_StarReportDataTopicConfigV2Topics,
        self::COMMENT_DATA_StarReportDataTopicConfigV2Topics,
        self::CONVERT_DATA_StarReportDataTopicConfigV2Topics,
        self::DY_SHOP_DATA_StarReportDataTopicConfigV2Topics,
        self::FLOW_DATA_StarReportDataTopicConfigV2Topics,
        self::INDEX_SCORE_DATA_StarReportDataTopicConfigV2Topics,
        self::RECOMMEND_DATA_StarReportDataTopicConfigV2Topics,
        self::SEARCH_DATA_StarReportDataTopicConfigV2Topics,
        self::USER_DISTRIBUTION_DATA_StarReportDataTopicConfigV2Topics,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StarReportDataTopicConfigV2Topics', $value));
        }
        return (string) $value;
    }
}
