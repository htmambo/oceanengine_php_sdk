<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdGetV10DataListCampaignScene
{
    public const DAILY_SALE_QianchuanAdGetV10DataListCampaignScene = 'DAILY_SALE';
    public const LIVE_HEAT_QianchuanAdGetV10DataListCampaignScene = 'LIVE_HEAT';
    public const NEW_CUSTOMER_TRANSFORMATION_QianchuanAdGetV10DataListCampaignScene = 'NEW_CUSTOMER_TRANSFORMATION';
    public const NEW_PRODUCT_BOOST_QianchuanAdGetV10DataListCampaignScene = 'NEW_PRODUCT_BOOST';
    public const PLANT_GRASS_QianchuanAdGetV10DataListCampaignScene = 'PLANT_GRASS';
    public const PRODUCT_HEAT_QianchuanAdGetV10DataListCampaignScene = 'PRODUCT_HEAT';

    public const ALLOWED_VALUES = [
        self::DAILY_SALE_QianchuanAdGetV10DataListCampaignScene,
        self::LIVE_HEAT_QianchuanAdGetV10DataListCampaignScene,
        self::NEW_CUSTOMER_TRANSFORMATION_QianchuanAdGetV10DataListCampaignScene,
        self::NEW_PRODUCT_BOOST_QianchuanAdGetV10DataListCampaignScene,
        self::PLANT_GRASS_QianchuanAdGetV10DataListCampaignScene,
        self::PRODUCT_HEAT_QianchuanAdGetV10DataListCampaignScene,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdGetV10DataListCampaignScene', $value));
        }
        return (string) $value;
    }
}
