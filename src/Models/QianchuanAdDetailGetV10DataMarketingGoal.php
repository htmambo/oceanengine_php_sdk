<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdDetailGetV10DataMarketingGoal
{
    public const ALL_QianchuanAdDetailGetV10DataMarketingGoal = 'ALL';
    public const LIVE_PROM_GOODS_QianchuanAdDetailGetV10DataMarketingGoal = 'LIVE_PROM_GOODS';
    public const VIDEO_PROM_GOODS_QianchuanAdDetailGetV10DataMarketingGoal = 'VIDEO_PROM_GOODS';

    public const ALLOWED_VALUES = [
        self::ALL_QianchuanAdDetailGetV10DataMarketingGoal,
        self::LIVE_PROM_GOODS_QianchuanAdDetailGetV10DataMarketingGoal,
        self::VIDEO_PROM_GOODS_QianchuanAdDetailGetV10DataMarketingGoal,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdDetailGetV10DataMarketingGoal', $value));
        }
        return (string) $value;
    }
}
