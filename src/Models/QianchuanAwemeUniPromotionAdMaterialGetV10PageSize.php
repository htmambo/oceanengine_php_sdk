<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAwemeUniPromotionAdMaterialGetV10PageSize
{
    public const Enum_10_QianchuanAwemeUniPromotionAdMaterialGetV10PageSize = 10;
    public const Enum_20_QianchuanAwemeUniPromotionAdMaterialGetV10PageSize = 20;
    public const Enum_50_QianchuanAwemeUniPromotionAdMaterialGetV10PageSize = 50;
    public const Enum_100_QianchuanAwemeUniPromotionAdMaterialGetV10PageSize = 100;

    public const ALLOWED_VALUES = [
        self::Enum_10_QianchuanAwemeUniPromotionAdMaterialGetV10PageSize,
        self::Enum_20_QianchuanAwemeUniPromotionAdMaterialGetV10PageSize,
        self::Enum_50_QianchuanAwemeUniPromotionAdMaterialGetV10PageSize,
        self::Enum_100_QianchuanAwemeUniPromotionAdMaterialGetV10PageSize,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAwemeUniPromotionAdMaterialGetV10PageSize', $value));
        }
        return (string) $value;
    }
}
