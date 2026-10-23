<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanToolsAllowCouponV10CampaignScene
{
    public const DAILY_SALE_QianchuanToolsAllowCouponV10CampaignScene = 'DAILY_SALE';
    public const NEW_CUSTOMER_TRANSFORMATION_QianchuanToolsAllowCouponV10CampaignScene = 'NEW_CUSTOMER_TRANSFORMATION';
    public const NEW_PRODUCT_BOOST_QianchuanToolsAllowCouponV10CampaignScene = 'NEW_PRODUCT_BOOST';

    public const ALLOWED_VALUES = [
        self::DAILY_SALE_QianchuanToolsAllowCouponV10CampaignScene,
        self::NEW_CUSTOMER_TRANSFORMATION_QianchuanToolsAllowCouponV10CampaignScene,
        self::NEW_PRODUCT_BOOST_QianchuanToolsAllowCouponV10CampaignScene,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanToolsAllowCouponV10CampaignScene', $value));
        }
        return (string) $value;
    }
}
