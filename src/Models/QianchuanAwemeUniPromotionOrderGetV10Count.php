<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAwemeUniPromotionOrderGetV10Count
{
    public const Enum_10_QianchuanAwemeUniPromotionOrderGetV10Count = 10;
    public const Enum_20_QianchuanAwemeUniPromotionOrderGetV10Count = 20;
    public const Enum_50_QianchuanAwemeUniPromotionOrderGetV10Count = 50;

    public const ALLOWED_VALUES = [
        self::Enum_10_QianchuanAwemeUniPromotionOrderGetV10Count,
        self::Enum_20_QianchuanAwemeUniPromotionOrderGetV10Count,
        self::Enum_50_QianchuanAwemeUniPromotionOrderGetV10Count,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAwemeUniPromotionOrderGetV10Count', $value));
        }
        return (string) $value;
    }
}
