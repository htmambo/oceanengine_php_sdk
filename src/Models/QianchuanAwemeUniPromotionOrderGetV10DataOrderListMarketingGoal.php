<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAwemeUniPromotionOrderGetV10DataOrderListMarketingGoal
{
    public const LIVE_PROM_GOODS_QianchuanAwemeUniPromotionOrderGetV10DataOrderListMarketingGoal = 'LIVE_PROM_GOODS';
    public const VIDEO_PROM_GOODS_QianchuanAwemeUniPromotionOrderGetV10DataOrderListMarketingGoal = 'VIDEO_PROM_GOODS';

    public const ALLOWED_VALUES = [
        self::LIVE_PROM_GOODS_QianchuanAwemeUniPromotionOrderGetV10DataOrderListMarketingGoal,
        self::VIDEO_PROM_GOODS_QianchuanAwemeUniPromotionOrderGetV10DataOrderListMarketingGoal,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAwemeUniPromotionOrderGetV10DataOrderListMarketingGoal', $value));
        }
        return (string) $value;
    }
}
