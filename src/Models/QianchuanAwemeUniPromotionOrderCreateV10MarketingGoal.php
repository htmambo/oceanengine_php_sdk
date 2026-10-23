<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAwemeUniPromotionOrderCreateV10MarketingGoal
{
    public const LIVE_PROM_GOODS_QianchuanAwemeUniPromotionOrderCreateV10MarketingGoal = 'LIVE_PROM_GOODS';
    public const VIDEO_PROM_GOODS_QianchuanAwemeUniPromotionOrderCreateV10MarketingGoal = 'VIDEO_PROM_GOODS';

    public const ALLOWED_VALUES = [
        self::LIVE_PROM_GOODS_QianchuanAwemeUniPromotionOrderCreateV10MarketingGoal,
        self::VIDEO_PROM_GOODS_QianchuanAwemeUniPromotionOrderCreateV10MarketingGoal,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAwemeUniPromotionOrderCreateV10MarketingGoal', $value));
        }
        return (string) $value;
    }
}
