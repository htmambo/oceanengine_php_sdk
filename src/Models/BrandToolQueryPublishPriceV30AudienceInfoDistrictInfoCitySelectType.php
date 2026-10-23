<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandToolQueryPublishPriceV30AudienceInfoDistrictInfoCitySelectType
{
    public const EXCLUDE_BrandToolQueryPublishPriceV30AudienceInfoDistrictInfoCitySelectType = 'EXCLUDE';
    public const SELECT_BrandToolQueryPublishPriceV30AudienceInfoDistrictInfoCitySelectType = 'SELECT';

    public const ALLOWED_VALUES = [
        self::EXCLUDE_BrandToolQueryPublishPriceV30AudienceInfoDistrictInfoCitySelectType,
        self::SELECT_BrandToolQueryPublishPriceV30AudienceInfoDistrictInfoCitySelectType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandToolQueryPublishPriceV30AudienceInfoDistrictInfoCitySelectType', $value));
        }
        return (string) $value;
    }
}
