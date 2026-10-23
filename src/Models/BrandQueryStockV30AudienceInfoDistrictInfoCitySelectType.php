<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandQueryStockV30AudienceInfoDistrictInfoCitySelectType
{
    public const EXCLUDE_BrandQueryStockV30AudienceInfoDistrictInfoCitySelectType = 'EXCLUDE';
    public const SELECT_BrandQueryStockV30AudienceInfoDistrictInfoCitySelectType = 'SELECT';

    public const ALLOWED_VALUES = [
        self::EXCLUDE_BrandQueryStockV30AudienceInfoDistrictInfoCitySelectType,
        self::SELECT_BrandQueryStockV30AudienceInfoDistrictInfoCitySelectType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandQueryStockV30AudienceInfoDistrictInfoCitySelectType', $value));
        }
        return (string) $value;
    }
}
