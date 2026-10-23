<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAwemeAuthorizedGetV10FilteringMarketingGoal
{
    public const ALL_QianchuanAwemeAuthorizedGetV10FilteringMarketingGoal = 'ALL';
    public const LIVE_PROM_GOODS_QianchuanAwemeAuthorizedGetV10FilteringMarketingGoal = 'LIVE_PROM_GOODS';
    public const VIDEO_PROM_GOODS_QianchuanAwemeAuthorizedGetV10FilteringMarketingGoal = 'VIDEO_PROM_GOODS';

    public const ALLOWED_VALUES = [
        self::ALL_QianchuanAwemeAuthorizedGetV10FilteringMarketingGoal,
        self::LIVE_PROM_GOODS_QianchuanAwemeAuthorizedGetV10FilteringMarketingGoal,
        self::VIDEO_PROM_GOODS_QianchuanAwemeAuthorizedGetV10FilteringMarketingGoal,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAwemeAuthorizedGetV10FilteringMarketingGoal', $value));
        }
        return (string) $value;
    }
}
