<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StarReportCustomDataTopicDailyReportV2Topics
{
    public const BASIC_DATA_StarReportCustomDataTopicDailyReportV2Topics = 'BASIC_DATA';
    public const CONVERT_DATA_StarReportCustomDataTopicDailyReportV2Topics = 'CONVERT_DATA';
    public const FLOW_DATA_StarReportCustomDataTopicDailyReportV2Topics = 'FLOW_DATA';
    public const RECOMMEND_DATA_StarReportCustomDataTopicDailyReportV2Topics = 'RECOMMEND_DATA';
    public const SEARCH_DATA_StarReportCustomDataTopicDailyReportV2Topics = 'SEARCH_DATA';

    public const ALLOWED_VALUES = [
        self::BASIC_DATA_StarReportCustomDataTopicDailyReportV2Topics,
        self::CONVERT_DATA_StarReportCustomDataTopicDailyReportV2Topics,
        self::FLOW_DATA_StarReportCustomDataTopicDailyReportV2Topics,
        self::RECOMMEND_DATA_StarReportCustomDataTopicDailyReportV2Topics,
        self::SEARCH_DATA_StarReportCustomDataTopicDailyReportV2Topics,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StarReportCustomDataTopicDailyReportV2Topics', $value));
        }
        return (string) $value;
    }
}
