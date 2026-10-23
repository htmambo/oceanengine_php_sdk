<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandOrderCreateV30AudienceInfoDistrictInfoCitySelectType
{
    public const EXCLUDE_BrandOrderCreateV30AudienceInfoDistrictInfoCitySelectType = 'EXCLUDE';
    public const SELECT_BrandOrderCreateV30AudienceInfoDistrictInfoCitySelectType = 'SELECT';

    public const ALLOWED_VALUES = [
        self::EXCLUDE_BrandOrderCreateV30AudienceInfoDistrictInfoCitySelectType,
        self::SELECT_BrandOrderCreateV30AudienceInfoDistrictInfoCitySelectType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandOrderCreateV30AudienceInfoDistrictInfoCitySelectType', $value));
        }
        return (string) $value;
    }
}
