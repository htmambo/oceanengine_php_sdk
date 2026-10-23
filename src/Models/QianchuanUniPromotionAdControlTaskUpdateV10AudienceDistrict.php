<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionAdControlTaskUpdateV10AudienceDistrict
{
    public const CITY_QianchuanUniPromotionAdControlTaskUpdateV10AudienceDistrict = 'CITY';
    public const COUNTY_QianchuanUniPromotionAdControlTaskUpdateV10AudienceDistrict = 'COUNTY';
    public const NONE_QianchuanUniPromotionAdControlTaskUpdateV10AudienceDistrict = 'NONE';

    public const ALLOWED_VALUES = [
        self::CITY_QianchuanUniPromotionAdControlTaskUpdateV10AudienceDistrict,
        self::COUNTY_QianchuanUniPromotionAdControlTaskUpdateV10AudienceDistrict,
        self::NONE_QianchuanUniPromotionAdControlTaskUpdateV10AudienceDistrict,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionAdControlTaskUpdateV10AudienceDistrict', $value));
        }
        return (string) $value;
    }
}
