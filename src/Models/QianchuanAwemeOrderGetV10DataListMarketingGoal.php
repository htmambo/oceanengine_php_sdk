<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAwemeOrderGetV10DataListMarketingGoal
{
    public const LIVE_PROM_GOODS_QianchuanAwemeOrderGetV10DataListMarketingGoal = 'LIVE_PROM_GOODS';
    public const VIDEO_PROM_GOODS_QianchuanAwemeOrderGetV10DataListMarketingGoal = 'VIDEO_PROM_GOODS';

    public const ALLOWED_VALUES = [
        self::LIVE_PROM_GOODS_QianchuanAwemeOrderGetV10DataListMarketingGoal,
        self::VIDEO_PROM_GOODS_QianchuanAwemeOrderGetV10DataListMarketingGoal,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAwemeOrderGetV10DataListMarketingGoal', $value));
        }
        return (string) $value;
    }
}
