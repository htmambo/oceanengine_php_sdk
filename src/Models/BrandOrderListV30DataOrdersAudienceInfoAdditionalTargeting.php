<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandOrderListV30DataOrdersAudienceInfoAdditionalTargeting
{
    public const DISABLED_BrandOrderListV30DataOrdersAudienceInfoAdditionalTargeting = 'DISABLED';
    public const USE_SHOP_VISIT_SHOW_BrandOrderListV30DataOrdersAudienceInfoAdditionalTargeting = 'USE_SHOP_VISIT_SHOW';
    public const USE_SPLASH_SHOW_BrandOrderListV30DataOrdersAudienceInfoAdditionalTargeting = 'USE_SPLASH_SHOW';

    public const ALLOWED_VALUES = [
        self::DISABLED_BrandOrderListV30DataOrdersAudienceInfoAdditionalTargeting,
        self::USE_SHOP_VISIT_SHOW_BrandOrderListV30DataOrdersAudienceInfoAdditionalTargeting,
        self::USE_SPLASH_SHOW_BrandOrderListV30DataOrdersAudienceInfoAdditionalTargeting,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandOrderListV30DataOrdersAudienceInfoAdditionalTargeting', $value));
        }
        return (string) $value;
    }
}
