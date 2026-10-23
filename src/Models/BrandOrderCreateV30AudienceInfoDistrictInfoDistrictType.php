<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandOrderCreateV30AudienceInfoDistrictInfoDistrictType
{
    public const REGION_BrandOrderCreateV30AudienceInfoDistrictInfoDistrictType = 'REGION';
    public const UNLIMITED_BrandOrderCreateV30AudienceInfoDistrictInfoDistrictType = 'UNLIMITED';

    public const ALLOWED_VALUES = [
        self::REGION_BrandOrderCreateV30AudienceInfoDistrictInfoDistrictType,
        self::UNLIMITED_BrandOrderCreateV30AudienceInfoDistrictInfoDistrictType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandOrderCreateV30AudienceInfoDistrictInfoDistrictType', $value));
        }
        return (string) $value;
    }
}
