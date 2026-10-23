<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanReportUniPromotionDimensionDataAuthorGetV10MarketingGoal
{
    public const ALL_QianchuanReportUniPromotionDimensionDataAuthorGetV10MarketingGoal = 'ALL';
    public const LIVE_PROM_GOODS_QianchuanReportUniPromotionDimensionDataAuthorGetV10MarketingGoal = 'LIVE_PROM_GOODS';
    public const VIDEO_PROM_GOODS_QianchuanReportUniPromotionDimensionDataAuthorGetV10MarketingGoal = 'VIDEO_PROM_GOODS';

    public const ALLOWED_VALUES = [
        self::ALL_QianchuanReportUniPromotionDimensionDataAuthorGetV10MarketingGoal,
        self::LIVE_PROM_GOODS_QianchuanReportUniPromotionDimensionDataAuthorGetV10MarketingGoal,
        self::VIDEO_PROM_GOODS_QianchuanReportUniPromotionDimensionDataAuthorGetV10MarketingGoal,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanReportUniPromotionDimensionDataAuthorGetV10MarketingGoal', $value));
        }
        return (string) $value;
    }
}
