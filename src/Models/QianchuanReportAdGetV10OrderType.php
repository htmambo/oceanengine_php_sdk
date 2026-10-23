<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanReportAdGetV10OrderType
{
    public const ASC_QianchuanReportAdGetV10OrderType = 'ASC';
    public const DESC_QianchuanReportAdGetV10OrderType = 'DESC';

    public const ALLOWED_VALUES = [
        self::ASC_QianchuanReportAdGetV10OrderType,
        self::DESC_QianchuanReportAdGetV10OrderType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanReportAdGetV10OrderType', $value));
        }
        return (string) $value;
    }
}
