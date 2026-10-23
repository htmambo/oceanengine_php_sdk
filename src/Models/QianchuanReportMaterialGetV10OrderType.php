<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanReportMaterialGetV10OrderType
{
    public const ASC_QianchuanReportMaterialGetV10OrderType = 'ASC';
    public const DESC_QianchuanReportMaterialGetV10OrderType = 'DESC';

    public const ALLOWED_VALUES = [
        self::ASC_QianchuanReportMaterialGetV10OrderType,
        self::DESC_QianchuanReportMaterialGetV10OrderType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanReportMaterialGetV10OrderType', $value));
        }
        return (string) $value;
    }
}
