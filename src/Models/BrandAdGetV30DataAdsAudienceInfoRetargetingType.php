<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandAdGetV30DataAdsAudienceInfoRetargetingType
{
    public const Enum_0_BrandAdGetV30DataAdsAudienceInfoRetargetingType = 0;
    public const Enum_1_BrandAdGetV30DataAdsAudienceInfoRetargetingType = 1;
    public const Enum_2_BrandAdGetV30DataAdsAudienceInfoRetargetingType = 2;
    public const Enum_3_BrandAdGetV30DataAdsAudienceInfoRetargetingType = 3;
    public const Enum_4_BrandAdGetV30DataAdsAudienceInfoRetargetingType = 4;
    public const Enum_5_BrandAdGetV30DataAdsAudienceInfoRetargetingType = 5;

    public const ALLOWED_VALUES = [
        self::Enum_0_BrandAdGetV30DataAdsAudienceInfoRetargetingType,
        self::Enum_1_BrandAdGetV30DataAdsAudienceInfoRetargetingType,
        self::Enum_2_BrandAdGetV30DataAdsAudienceInfoRetargetingType,
        self::Enum_3_BrandAdGetV30DataAdsAudienceInfoRetargetingType,
        self::Enum_4_BrandAdGetV30DataAdsAudienceInfoRetargetingType,
        self::Enum_5_BrandAdGetV30DataAdsAudienceInfoRetargetingType,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandAdGetV30DataAdsAudienceInfoRetargetingType', $value));
        }
        return (string) $value;
    }
}
