<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandAdGetV30DataAdsAudienceInfoExcludeDistrict
{
    public const Enum_0_BrandAdGetV30DataAdsAudienceInfoExcludeDistrict = 0;
    public const Enum_1_BrandAdGetV30DataAdsAudienceInfoExcludeDistrict = 1;

    public const ALLOWED_VALUES = [
        self::Enum_0_BrandAdGetV30DataAdsAudienceInfoExcludeDistrict,
        self::Enum_1_BrandAdGetV30DataAdsAudienceInfoExcludeDistrict,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandAdGetV30DataAdsAudienceInfoExcludeDistrict', $value));
        }
        return (string) $value;
    }
}
