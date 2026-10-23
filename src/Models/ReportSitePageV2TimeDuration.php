<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportSitePageV2TimeDuration
{
    public const DAY_ReportSitePageV2TimeDuration = 'DAY';
    public const THREE_DAYS_ReportSitePageV2TimeDuration = 'THREE_DAYS';
    public const WEEK_ReportSitePageV2TimeDuration = 'WEEK';
    public const MONTH_ReportSitePageV2TimeDuration = 'MONTH';

    public const ALLOWED_VALUES = [
        self::DAY_ReportSitePageV2TimeDuration,
        self::THREE_DAYS_ReportSitePageV2TimeDuration,
        self::WEEK_ReportSitePageV2TimeDuration,
        self::MONTH_ReportSitePageV2TimeDuration,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportSitePageV2TimeDuration', $value));
        }
        return (string) $value;
    }
}
