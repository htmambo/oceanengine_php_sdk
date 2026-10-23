<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandOrderUpdateV30AudienceInfoDistrictInfoCitySelectType
{
    public const EXCLUDE_BrandOrderUpdateV30AudienceInfoDistrictInfoCitySelectType = 'EXCLUDE';
    public const SELECT_BrandOrderUpdateV30AudienceInfoDistrictInfoCitySelectType = 'SELECT';

    public const ALLOWED_VALUES = [
        self::EXCLUDE_BrandOrderUpdateV30AudienceInfoDistrictInfoCitySelectType,
        self::SELECT_BrandOrderUpdateV30AudienceInfoDistrictInfoCitySelectType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandOrderUpdateV30AudienceInfoDistrictInfoCitySelectType', $value));
        }
        return (string) $value;
    }
}
