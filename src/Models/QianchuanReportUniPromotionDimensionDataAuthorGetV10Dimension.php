<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanReportUniPromotionDimensionDataAuthorGetV10Dimension
{
    public const TIME_GRANULARITY_DAILY_QianchuanReportUniPromotionDimensionDataAuthorGetV10Dimension = 'TIME_GRANULARITY_DAILY';
    public const TIME_GRANULARITY_HOURLY_QianchuanReportUniPromotionDimensionDataAuthorGetV10Dimension = 'TIME_GRANULARITY_HOURLY';

    public const ALLOWED_VALUES = [
        self::TIME_GRANULARITY_DAILY_QianchuanReportUniPromotionDimensionDataAuthorGetV10Dimension,
        self::TIME_GRANULARITY_HOURLY_QianchuanReportUniPromotionDimensionDataAuthorGetV10Dimension,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanReportUniPromotionDimensionDataAuthorGetV10Dimension', $value));
        }
        return (string) $value;
    }
}
