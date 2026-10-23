<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandPolicyListV30AudienceInfoDistrictInfoCitySelectType
{
    public const EXCLUDE_BrandPolicyListV30AudienceInfoDistrictInfoCitySelectType = 'EXCLUDE';
    public const SELECT_BrandPolicyListV30AudienceInfoDistrictInfoCitySelectType = 'SELECT';

    public const ALLOWED_VALUES = [
        self::EXCLUDE_BrandPolicyListV30AudienceInfoDistrictInfoCitySelectType,
        self::SELECT_BrandPolicyListV30AudienceInfoDistrictInfoCitySelectType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandPolicyListV30AudienceInfoDistrictInfoCitySelectType', $value));
        }
        return (string) $value;
    }
}
