<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandOrderListV30DataOrdersAudienceInfoDistrictInfoCitySelectType
{
    public const EXCLUDE_BrandOrderListV30DataOrdersAudienceInfoDistrictInfoCitySelectType = 'EXCLUDE';
    public const SELECT_BrandOrderListV30DataOrdersAudienceInfoDistrictInfoCitySelectType = 'SELECT';

    public const ALLOWED_VALUES = [
        self::EXCLUDE_BrandOrderListV30DataOrdersAudienceInfoDistrictInfoCitySelectType,
        self::SELECT_BrandOrderListV30DataOrdersAudienceInfoDistrictInfoCitySelectType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandOrderListV30DataOrdersAudienceInfoDistrictInfoCitySelectType', $value));
        }
        return (string) $value;
    }
}
