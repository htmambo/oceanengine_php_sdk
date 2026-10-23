<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanReportUniPromotionDimensionDataRoomGetV10OrderType
{
    public const ASC_QianchuanReportUniPromotionDimensionDataRoomGetV10OrderType = 'ASC';
    public const DESC_QianchuanReportUniPromotionDimensionDataRoomGetV10OrderType = 'DESC';

    public const ALLOWED_VALUES = [
        self::ASC_QianchuanReportUniPromotionDimensionDataRoomGetV10OrderType,
        self::DESC_QianchuanReportUniPromotionDimensionDataRoomGetV10OrderType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanReportUniPromotionDimensionDataRoomGetV10OrderType', $value));
        }
        return (string) $value;
    }
}
