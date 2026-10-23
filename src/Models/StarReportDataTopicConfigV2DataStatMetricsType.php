<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StarReportDataTopicConfigV2DataStatMetricsType
{
    public const FLOAT64_StarReportDataTopicConfigV2DataStatMetricsType = 'FLOAT64';
    public const INT64_StarReportDataTopicConfigV2DataStatMetricsType = 'INT64';
    public const JSON_StarReportDataTopicConfigV2DataStatMetricsType = 'JSON';
    public const STRING_StarReportDataTopicConfigV2DataStatMetricsType = 'STRING';

    public const ALLOWED_VALUES = [
        self::FLOAT64_StarReportDataTopicConfigV2DataStatMetricsType,
        self::INT64_StarReportDataTopicConfigV2DataStatMetricsType,
        self::JSON_StarReportDataTopicConfigV2DataStatMetricsType,
        self::STRING_StarReportDataTopicConfigV2DataStatMetricsType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StarReportDataTopicConfigV2DataStatMetricsType', $value));
        }
        return (string) $value;
    }
}
