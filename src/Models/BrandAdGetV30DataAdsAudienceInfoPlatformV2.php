<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandAdGetV30DataAdsAudienceInfoPlatformV2
{
    public const Enum_1_BrandAdGetV30DataAdsAudienceInfoPlatformV2 = 1;
    public const Enum_2_BrandAdGetV30DataAdsAudienceInfoPlatformV2 = 2;
    public const Enum_3_BrandAdGetV30DataAdsAudienceInfoPlatformV2 = 3;
    public const Enum_4_BrandAdGetV30DataAdsAudienceInfoPlatformV2 = 4;
    public const Enum_5_BrandAdGetV30DataAdsAudienceInfoPlatformV2 = 5;

    public const ALLOWED_VALUES = [
        self::Enum_1_BrandAdGetV30DataAdsAudienceInfoPlatformV2,
        self::Enum_2_BrandAdGetV30DataAdsAudienceInfoPlatformV2,
        self::Enum_3_BrandAdGetV30DataAdsAudienceInfoPlatformV2,
        self::Enum_4_BrandAdGetV30DataAdsAudienceInfoPlatformV2,
        self::Enum_5_BrandAdGetV30DataAdsAudienceInfoPlatformV2,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandAdGetV30DataAdsAudienceInfoPlatformV2', $value));
        }
        return (string) $value;
    }
}
