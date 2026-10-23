<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandOrderUpdateV30AudienceInfoDistrictInfoDistrictType
{
    public const REGION_BrandOrderUpdateV30AudienceInfoDistrictInfoDistrictType = 'REGION';
    public const UNLIMITED_BrandOrderUpdateV30AudienceInfoDistrictInfoDistrictType = 'UNLIMITED';

    public const ALLOWED_VALUES = [
        self::REGION_BrandOrderUpdateV30AudienceInfoDistrictInfoDistrictType,
        self::UNLIMITED_BrandOrderUpdateV30AudienceInfoDistrictInfoDistrictType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandOrderUpdateV30AudienceInfoDistrictInfoDistrictType', $value));
        }
        return (string) $value;
    }
}
