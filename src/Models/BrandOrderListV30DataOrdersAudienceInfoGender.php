<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandOrderListV30DataOrdersAudienceInfoGender
{
    public const FEMALE_BrandOrderListV30DataOrdersAudienceInfoGender = 'FEMALE';
    public const MALE_BrandOrderListV30DataOrdersAudienceInfoGender = 'MALE';
    public const UNLIMITED_BrandOrderListV30DataOrdersAudienceInfoGender = 'UNLIMITED';

    public const ALLOWED_VALUES = [
        self::FEMALE_BrandOrderListV30DataOrdersAudienceInfoGender,
        self::MALE_BrandOrderListV30DataOrdersAudienceInfoGender,
        self::UNLIMITED_BrandOrderListV30DataOrdersAudienceInfoGender,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandOrderListV30DataOrdersAudienceInfoGender', $value));
        }
        return (string) $value;
    }
}
