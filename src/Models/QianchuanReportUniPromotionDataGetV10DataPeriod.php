<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanReportUniPromotionDataGetV10DataPeriod
{
    public const ALL_DATA_QianchuanReportUniPromotionDataGetV10DataPeriod = 'ALL_DATA';
    public const OVER_ALL_DATA_QianchuanReportUniPromotionDataGetV10DataPeriod = 'OVER_ALL_DATA';
    public const UNI_DATA_QianchuanReportUniPromotionDataGetV10DataPeriod = 'UNI_DATA';

    public const ALLOWED_VALUES = [
        self::ALL_DATA_QianchuanReportUniPromotionDataGetV10DataPeriod,
        self::OVER_ALL_DATA_QianchuanReportUniPromotionDataGetV10DataPeriod,
        self::UNI_DATA_QianchuanReportUniPromotionDataGetV10DataPeriod,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanReportUniPromotionDataGetV10DataPeriod', $value));
        }
        return (string) $value;
    }
}
