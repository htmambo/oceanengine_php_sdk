<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandAdGetV30DataAdsAudienceInfoAcV2
{
    public const Enum_1_BrandAdGetV30DataAdsAudienceInfoAcV2 = 1;
    public const Enum_2_BrandAdGetV30DataAdsAudienceInfoAcV2 = 2;
    public const Enum_3_BrandAdGetV30DataAdsAudienceInfoAcV2 = 3;
    public const Enum_4_BrandAdGetV30DataAdsAudienceInfoAcV2 = 4;

    public const ALLOWED_VALUES = [
        self::Enum_1_BrandAdGetV30DataAdsAudienceInfoAcV2,
        self::Enum_2_BrandAdGetV30DataAdsAudienceInfoAcV2,
        self::Enum_3_BrandAdGetV30DataAdsAudienceInfoAcV2,
        self::Enum_4_BrandAdGetV30DataAdsAudienceInfoAcV2,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandAdGetV30DataAdsAudienceInfoAcV2', $value));
        }
        return (string) $value;
    }
}
