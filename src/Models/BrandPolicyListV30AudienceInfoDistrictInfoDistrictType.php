<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandPolicyListV30AudienceInfoDistrictInfoDistrictType
{
    public const REGION_BrandPolicyListV30AudienceInfoDistrictInfoDistrictType = 'REGION';
    public const UNLIMITED_BrandPolicyListV30AudienceInfoDistrictInfoDistrictType = 'UNLIMITED';

    public const ALLOWED_VALUES = [
        self::REGION_BrandPolicyListV30AudienceInfoDistrictInfoDistrictType,
        self::UNLIMITED_BrandPolicyListV30AudienceInfoDistrictInfoDistrictType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandPolicyListV30AudienceInfoDistrictInfoDistrictType', $value));
        }
        return (string) $value;
    }
}
