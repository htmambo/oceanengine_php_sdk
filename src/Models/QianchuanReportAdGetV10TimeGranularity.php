<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanReportAdGetV10TimeGranularity
{
    public const TIME_GRANULARITY_DAILY_QianchuanReportAdGetV10TimeGranularity = 'TIME_GRANULARITY_DAILY';
    public const TIME_GRANULARITY_HOURLY_QianchuanReportAdGetV10TimeGranularity = 'TIME_GRANULARITY_HOURLY';

    public const ALLOWED_VALUES = [
        self::TIME_GRANULARITY_DAILY_QianchuanReportAdGetV10TimeGranularity,
        self::TIME_GRANULARITY_HOURLY_QianchuanReportAdGetV10TimeGranularity,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanReportAdGetV10TimeGranularity', $value));
        }
        return (string) $value;
    }
}
