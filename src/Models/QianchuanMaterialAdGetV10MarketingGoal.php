<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanMaterialAdGetV10MarketingGoal
{
    public const VIDEO_PROM_GOODS_QianchuanMaterialAdGetV10MarketingGoal = 'VIDEO_PROM_GOODS';
    public const LIVE_PROM_GOODS_QianchuanMaterialAdGetV10MarketingGoal = 'LIVE_PROM_GOODS';

    public const ALLOWED_VALUES = [
        self::VIDEO_PROM_GOODS_QianchuanMaterialAdGetV10MarketingGoal,
        self::LIVE_PROM_GOODS_QianchuanMaterialAdGetV10MarketingGoal,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanMaterialAdGetV10MarketingGoal', $value));
        }
        return (string) $value;
    }
}
