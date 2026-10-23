<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandAdGetV30DataAdsAudienceInfoBrandSafety
{
    public const Enum_0_BrandAdGetV30DataAdsAudienceInfoBrandSafety = 0;
    public const Enum_1_BrandAdGetV30DataAdsAudienceInfoBrandSafety = 1;
    public const Enum_2_BrandAdGetV30DataAdsAudienceInfoBrandSafety = 2;
    public const Enum_3_BrandAdGetV30DataAdsAudienceInfoBrandSafety = 3;
    public const Enum_4_BrandAdGetV30DataAdsAudienceInfoBrandSafety = 4;

    public const ALLOWED_VALUES = [
        self::Enum_0_BrandAdGetV30DataAdsAudienceInfoBrandSafety,
        self::Enum_1_BrandAdGetV30DataAdsAudienceInfoBrandSafety,
        self::Enum_2_BrandAdGetV30DataAdsAudienceInfoBrandSafety,
        self::Enum_3_BrandAdGetV30DataAdsAudienceInfoBrandSafety,
        self::Enum_4_BrandAdGetV30DataAdsAudienceInfoBrandSafety,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandAdGetV30DataAdsAudienceInfoBrandSafety', $value));
        }
        return (string) $value;
    }
}
