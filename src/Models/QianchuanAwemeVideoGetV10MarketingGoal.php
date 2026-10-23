<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAwemeVideoGetV10MarketingGoal
{
    public const LIVE_PROM_GOODS_QianchuanAwemeVideoGetV10MarketingGoal = 'LIVE_PROM_GOODS';
    public const VIDEO_PROM_GOODS_QianchuanAwemeVideoGetV10MarketingGoal = 'VIDEO_PROM_GOODS';

    public const ALLOWED_VALUES = [
        self::LIVE_PROM_GOODS_QianchuanAwemeVideoGetV10MarketingGoal,
        self::VIDEO_PROM_GOODS_QianchuanAwemeVideoGetV10MarketingGoal,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAwemeVideoGetV10MarketingGoal', $value));
        }
        return (string) $value;
    }
}
