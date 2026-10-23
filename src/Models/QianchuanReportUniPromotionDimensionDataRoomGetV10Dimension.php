<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanReportUniPromotionDimensionDataRoomGetV10Dimension
{
    public const TIME_GRANULARITY_DAILY_QianchuanReportUniPromotionDimensionDataRoomGetV10Dimension = 'TIME_GRANULARITY_DAILY';
    public const TIME_GRANULARITY_HOURLY_QianchuanReportUniPromotionDimensionDataRoomGetV10Dimension = 'TIME_GRANULARITY_HOURLY';

    public const ALLOWED_VALUES = [
        self::TIME_GRANULARITY_DAILY_QianchuanReportUniPromotionDimensionDataRoomGetV10Dimension,
        self::TIME_GRANULARITY_HOURLY_QianchuanReportUniPromotionDimensionDataRoomGetV10Dimension,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanReportUniPromotionDimensionDataRoomGetV10Dimension', $value));
        }
        return (string) $value;
    }
}
