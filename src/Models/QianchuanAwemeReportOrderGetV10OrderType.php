<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAwemeReportOrderGetV10OrderType
{
    public const ASC_QianchuanAwemeReportOrderGetV10OrderType = 'ASC';
    public const DESC_QianchuanAwemeReportOrderGetV10OrderType = 'DESC';

    public const ALLOWED_VALUES = [
        self::ASC_QianchuanAwemeReportOrderGetV10OrderType,
        self::DESC_QianchuanAwemeReportOrderGetV10OrderType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAwemeReportOrderGetV10OrderType', $value));
        }
        return (string) $value;
    }
}
