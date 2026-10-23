<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanReportUniPromotionDimensionDataAuthorGetV10OrderType
{
    public const ASC_QianchuanReportUniPromotionDimensionDataAuthorGetV10OrderType = 'ASC';
    public const DESC_QianchuanReportUniPromotionDimensionDataAuthorGetV10OrderType = 'DESC';

    public const ALLOWED_VALUES = [
        self::ASC_QianchuanReportUniPromotionDimensionDataAuthorGetV10OrderType,
        self::DESC_QianchuanReportUniPromotionDimensionDataAuthorGetV10OrderType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanReportUniPromotionDimensionDataAuthorGetV10OrderType', $value));
        }
        return (string) $value;
    }
}
