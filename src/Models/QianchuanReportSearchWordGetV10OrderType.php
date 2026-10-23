<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanReportSearchWordGetV10OrderType
{
    public const ASC_QianchuanReportSearchWordGetV10OrderType = 'ASC';
    public const DESC_QianchuanReportSearchWordGetV10OrderType = 'DESC';

    public const ALLOWED_VALUES = [
        self::ASC_QianchuanReportSearchWordGetV10OrderType,
        self::DESC_QianchuanReportSearchWordGetV10OrderType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanReportSearchWordGetV10OrderType', $value));
        }
        return (string) $value;
    }
}
