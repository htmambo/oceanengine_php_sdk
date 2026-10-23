<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanReportSearchWordGetV10FilteringMarketingGoal
{
    public const LIVE_PROM_GOODS_QianchuanReportSearchWordGetV10FilteringMarketingGoal = 'LIVE_PROM_GOODS';
    public const VIDEO_PROM_GOODS_QianchuanReportSearchWordGetV10FilteringMarketingGoal = 'VIDEO_PROM_GOODS';

    public const ALLOWED_VALUES = [
        self::LIVE_PROM_GOODS_QianchuanReportSearchWordGetV10FilteringMarketingGoal,
        self::VIDEO_PROM_GOODS_QianchuanReportSearchWordGetV10FilteringMarketingGoal,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanReportSearchWordGetV10FilteringMarketingGoal', $value));
        }
        return (string) $value;
    }
}
