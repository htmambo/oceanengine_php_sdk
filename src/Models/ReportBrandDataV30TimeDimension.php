<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportBrandDataV30TimeDimension
{
    public const DAY_ReportBrandDataV30TimeDimension = 'DAY';
    public const MONTH_ReportBrandDataV30TimeDimension = 'MONTH';
    public const WEEK_ReportBrandDataV30TimeDimension = 'WEEK';

    public const ALLOWED_VALUES = [
        self::DAY_ReportBrandDataV30TimeDimension,
        self::MONTH_ReportBrandDataV30TimeDimension,
        self::WEEK_ReportBrandDataV30TimeDimension,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportBrandDataV30TimeDimension', $value));
        }
        return (string) $value;
    }
}
