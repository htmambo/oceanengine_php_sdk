<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniAwemeAdCreateV10MarketingGoal
{
    public const LIVE_PROM_GOODS_QianchuanUniAwemeAdCreateV10MarketingGoal = 'LIVE_PROM_GOODS';
    public const VIDEO_PROM_GOODS_QianchuanUniAwemeAdCreateV10MarketingGoal = 'VIDEO_PROM_GOODS';

    public const ALLOWED_VALUES = [
        self::LIVE_PROM_GOODS_QianchuanUniAwemeAdCreateV10MarketingGoal,
        self::VIDEO_PROM_GOODS_QianchuanUniAwemeAdCreateV10MarketingGoal,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniAwemeAdCreateV10MarketingGoal', $value));
        }
        return (string) $value;
    }
}
