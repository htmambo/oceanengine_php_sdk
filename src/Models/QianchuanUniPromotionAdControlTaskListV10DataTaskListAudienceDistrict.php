<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionAdControlTaskListV10DataTaskListAudienceDistrict
{
    public const CITY_QianchuanUniPromotionAdControlTaskListV10DataTaskListAudienceDistrict = 'CITY';
    public const COUNTY_QianchuanUniPromotionAdControlTaskListV10DataTaskListAudienceDistrict = 'COUNTY';
    public const NONE_QianchuanUniPromotionAdControlTaskListV10DataTaskListAudienceDistrict = 'NONE';

    public const ALLOWED_VALUES = [
        self::CITY_QianchuanUniPromotionAdControlTaskListV10DataTaskListAudienceDistrict,
        self::COUNTY_QianchuanUniPromotionAdControlTaskListV10DataTaskListAudienceDistrict,
        self::NONE_QianchuanUniPromotionAdControlTaskListV10DataTaskListAudienceDistrict,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionAdControlTaskListV10DataTaskListAudienceDistrict', $value));
        }
        return (string) $value;
    }
}
