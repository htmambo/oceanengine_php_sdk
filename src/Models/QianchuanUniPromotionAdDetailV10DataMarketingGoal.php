<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionAdDetailV10DataMarketingGoal
{
    public const LIVE_PROM_GOODS_QianchuanUniPromotionAdDetailV10DataMarketingGoal = 'LIVE_PROM_GOODS';
    public const VIDEO_PROM_GOODS_QianchuanUniPromotionAdDetailV10DataMarketingGoal = 'VIDEO_PROM_GOODS';

    public const ALLOWED_VALUES = [
        self::LIVE_PROM_GOODS_QianchuanUniPromotionAdDetailV10DataMarketingGoal,
        self::VIDEO_PROM_GOODS_QianchuanUniPromotionAdDetailV10DataMarketingGoal,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionAdDetailV10DataMarketingGoal', $value));
        }
        return (string) $value;
    }
}
