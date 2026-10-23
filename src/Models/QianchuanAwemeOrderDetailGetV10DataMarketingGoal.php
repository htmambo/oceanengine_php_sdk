<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAwemeOrderDetailGetV10DataMarketingGoal
{
    public const LIVE_PROM_GOODS_QianchuanAwemeOrderDetailGetV10DataMarketingGoal = 'LIVE_PROM_GOODS';
    public const VIDEO_PROM_GOODS_QianchuanAwemeOrderDetailGetV10DataMarketingGoal = 'VIDEO_PROM_GOODS';

    public const ALLOWED_VALUES = [
        self::LIVE_PROM_GOODS_QianchuanAwemeOrderDetailGetV10DataMarketingGoal,
        self::VIDEO_PROM_GOODS_QianchuanAwemeOrderDetailGetV10DataMarketingGoal,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAwemeOrderDetailGetV10DataMarketingGoal', $value));
        }
        return (string) $value;
    }
}
