<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanReportAdvertiserGetV10FilteringMarketingGoal
{
    public const ALL_QianchuanReportAdvertiserGetV10FilteringMarketingGoal = 'ALL';
    public const LIVE_PROM_GOODS_QianchuanReportAdvertiserGetV10FilteringMarketingGoal = 'LIVE_PROM_GOODS';
    public const VIDEO_PROM_GOODS_QianchuanReportAdvertiserGetV10FilteringMarketingGoal = 'VIDEO_PROM_GOODS';

    public const ALLOWED_VALUES = [
        self::ALL_QianchuanReportAdvertiserGetV10FilteringMarketingGoal,
        self::LIVE_PROM_GOODS_QianchuanReportAdvertiserGetV10FilteringMarketingGoal,
        self::VIDEO_PROM_GOODS_QianchuanReportAdvertiserGetV10FilteringMarketingGoal,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanReportAdvertiserGetV10FilteringMarketingGoal', $value));
        }
        return (string) $value;
    }
}
