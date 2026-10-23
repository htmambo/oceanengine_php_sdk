<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionAdControlTaskCreateV10AudienceDistrict
{
    public const CITY_QianchuanUniPromotionAdControlTaskCreateV10AudienceDistrict = 'CITY';
    public const COUNTY_QianchuanUniPromotionAdControlTaskCreateV10AudienceDistrict = 'COUNTY';
    public const NONE_QianchuanUniPromotionAdControlTaskCreateV10AudienceDistrict = 'NONE';

    public const ALLOWED_VALUES = [
        self::CITY_QianchuanUniPromotionAdControlTaskCreateV10AudienceDistrict,
        self::COUNTY_QianchuanUniPromotionAdControlTaskCreateV10AudienceDistrict,
        self::NONE_QianchuanUniPromotionAdControlTaskCreateV10AudienceDistrict,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionAdControlTaskCreateV10AudienceDistrict', $value));
        }
        return (string) $value;
    }
}
