<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandOrderListV30DataOrdersAudienceInfoDistrictInfoDistrictType
{
    public const REGION_BrandOrderListV30DataOrdersAudienceInfoDistrictInfoDistrictType = 'REGION';
    public const UNLIMITED_BrandOrderListV30DataOrdersAudienceInfoDistrictInfoDistrictType = 'UNLIMITED';

    public const ALLOWED_VALUES = [
        self::REGION_BrandOrderListV30DataOrdersAudienceInfoDistrictInfoDistrictType,
        self::UNLIMITED_BrandOrderListV30DataOrdersAudienceInfoDistrictInfoDistrictType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandOrderListV30DataOrdersAudienceInfoDistrictInfoDistrictType', $value));
        }
        return (string) $value;
    }
}
