<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanReportLongTransferOrderGetV10MarketingGoal
{
    public const ALL_QianchuanReportLongTransferOrderGetV10MarketingGoal = 'ALL';
    public const LIVE_PROM_GOODS_QianchuanReportLongTransferOrderGetV10MarketingGoal = 'LIVE_PROM_GOODS';
    public const VIDEO_PROM_GOODS_QianchuanReportLongTransferOrderGetV10MarketingGoal = 'VIDEO_PROM_GOODS';

    public const ALLOWED_VALUES = [
        self::ALL_QianchuanReportLongTransferOrderGetV10MarketingGoal,
        self::LIVE_PROM_GOODS_QianchuanReportLongTransferOrderGetV10MarketingGoal,
        self::VIDEO_PROM_GOODS_QianchuanReportLongTransferOrderGetV10MarketingGoal,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanReportLongTransferOrderGetV10MarketingGoal', $value));
        }
        return (string) $value;
    }
}
