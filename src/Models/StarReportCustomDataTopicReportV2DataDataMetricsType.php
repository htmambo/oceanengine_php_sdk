<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StarReportCustomDataTopicReportV2DataDataMetricsType
{
    public const FLOAT64_StarReportCustomDataTopicReportV2DataDataMetricsType = 'FLOAT64';
    public const INT64_StarReportCustomDataTopicReportV2DataDataMetricsType = 'INT64';
    public const JSON_StarReportCustomDataTopicReportV2DataDataMetricsType = 'JSON';
    public const STRING_StarReportCustomDataTopicReportV2DataDataMetricsType = 'STRING';

    public const ALLOWED_VALUES = [
        self::FLOAT64_StarReportCustomDataTopicReportV2DataDataMetricsType,
        self::INT64_StarReportCustomDataTopicReportV2DataDataMetricsType,
        self::JSON_StarReportCustomDataTopicReportV2DataDataMetricsType,
        self::STRING_StarReportCustomDataTopicReportV2DataDataMetricsType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StarReportCustomDataTopicReportV2DataDataMetricsType', $value));
        }
        return (string) $value;
    }
}
