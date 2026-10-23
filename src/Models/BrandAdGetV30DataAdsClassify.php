<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandAdGetV30DataAdsClassify
{
    public const Enum_1_BrandAdGetV30DataAdsClassify = 1;
    public const Enum_2_BrandAdGetV30DataAdsClassify = 2;
    public const Enum_3_BrandAdGetV30DataAdsClassify = 3;
    public const Enum_4_BrandAdGetV30DataAdsClassify = 4;
    public const Enum_5_BrandAdGetV30DataAdsClassify = 5;
    public const Enum_6_BrandAdGetV30DataAdsClassify = 6;
    public const Enum_7_BrandAdGetV30DataAdsClassify = 7;

    public const ALLOWED_VALUES = [
        self::Enum_1_BrandAdGetV30DataAdsClassify,
        self::Enum_2_BrandAdGetV30DataAdsClassify,
        self::Enum_3_BrandAdGetV30DataAdsClassify,
        self::Enum_4_BrandAdGetV30DataAdsClassify,
        self::Enum_5_BrandAdGetV30DataAdsClassify,
        self::Enum_6_BrandAdGetV30DataAdsClassify,
        self::Enum_7_BrandAdGetV30DataAdsClassify,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandAdGetV30DataAdsClassify', $value));
        }
        return (string) $value;
    }
}
