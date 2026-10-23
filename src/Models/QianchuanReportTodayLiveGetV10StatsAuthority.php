<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanReportTodayLiveGetV10StatsAuthority
{
    public const CURRENT_QianchuanReportTodayLiveGetV10StatsAuthority = 'CURRENT';
    public const QUALIFICATION_QianchuanReportTodayLiveGetV10StatsAuthority = 'QUALIFICATION';

    public const ALLOWED_VALUES = [
        self::CURRENT_QianchuanReportTodayLiveGetV10StatsAuthority,
        self::QUALIFICATION_QianchuanReportTodayLiveGetV10StatsAuthority,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanReportTodayLiveGetV10StatsAuthority', $value));
        }
        return (string) $value;
    }
}
