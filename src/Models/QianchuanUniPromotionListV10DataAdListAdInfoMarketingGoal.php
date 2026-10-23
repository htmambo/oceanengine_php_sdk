<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionListV10DataAdListAdInfoMarketingGoal
{
    public const ALL_QianchuanUniPromotionListV10DataAdListAdInfoMarketingGoal = 'ALL';
    public const LIVE_PROM_GOODS_QianchuanUniPromotionListV10DataAdListAdInfoMarketingGoal = 'LIVE_PROM_GOODS';
    public const VIDEO_PROM_GOODS_QianchuanUniPromotionListV10DataAdListAdInfoMarketingGoal = 'VIDEO_PROM_GOODS';

    public const ALLOWED_VALUES = [
        self::ALL_QianchuanUniPromotionListV10DataAdListAdInfoMarketingGoal,
        self::LIVE_PROM_GOODS_QianchuanUniPromotionListV10DataAdListAdInfoMarketingGoal,
        self::VIDEO_PROM_GOODS_QianchuanUniPromotionListV10DataAdListAdInfoMarketingGoal,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionListV10DataAdListAdInfoMarketingGoal', $value));
        }
        return (string) $value;
    }
}
