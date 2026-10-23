<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanReportSearchWordGetV10FilteringRangeCalculation
{
    public const LOWER_QianchuanReportSearchWordGetV10FilteringRangeCalculation = 'LOWER';
    public const UPPER_QianchuanReportSearchWordGetV10FilteringRangeCalculation = 'UPPER';

    public const ALLOWED_VALUES = [
        self::LOWER_QianchuanReportSearchWordGetV10FilteringRangeCalculation,
        self::UPPER_QianchuanReportSearchWordGetV10FilteringRangeCalculation,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanReportSearchWordGetV10FilteringRangeCalculation', $value));
        }
        return (string) $value;
    }
}
