<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportBrandAgentDataV30TimeDimension
{
    public const DAY_ReportBrandAgentDataV30TimeDimension = 'DAY';
    public const MONTH_ReportBrandAgentDataV30TimeDimension = 'MONTH';
    public const WEEK_ReportBrandAgentDataV30TimeDimension = 'WEEK';

    public const ALLOWED_VALUES = [
        self::DAY_ReportBrandAgentDataV30TimeDimension,
        self::MONTH_ReportBrandAgentDataV30TimeDimension,
        self::WEEK_ReportBrandAgentDataV30TimeDimension,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportBrandAgentDataV30TimeDimension', $value));
        }
        return (string) $value;
    }
}
