<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdDetailGetV10DataCampaignScene
{
    public const DAILY_SALE_QianchuanAdDetailGetV10DataCampaignScene = 'DAILY_SALE';
    public const LIVE_HEAT_QianchuanAdDetailGetV10DataCampaignScene = 'LIVE_HEAT';
    public const NEW_CUSTOMER_TRANSFORMATION_QianchuanAdDetailGetV10DataCampaignScene = 'NEW_CUSTOMER_TRANSFORMATION';
    public const NEW_PRODUCT_BOOST_QianchuanAdDetailGetV10DataCampaignScene = 'NEW_PRODUCT_BOOST';
    public const PLANT_GRASS_QianchuanAdDetailGetV10DataCampaignScene = 'PLANT_GRASS';
    public const PRODUCT_HEAT_QianchuanAdDetailGetV10DataCampaignScene = 'PRODUCT_HEAT';

    public const ALLOWED_VALUES = [
        self::DAILY_SALE_QianchuanAdDetailGetV10DataCampaignScene,
        self::LIVE_HEAT_QianchuanAdDetailGetV10DataCampaignScene,
        self::NEW_CUSTOMER_TRANSFORMATION_QianchuanAdDetailGetV10DataCampaignScene,
        self::NEW_PRODUCT_BOOST_QianchuanAdDetailGetV10DataCampaignScene,
        self::PLANT_GRASS_QianchuanAdDetailGetV10DataCampaignScene,
        self::PRODUCT_HEAT_QianchuanAdDetailGetV10DataCampaignScene,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdDetailGetV10DataCampaignScene', $value));
        }
        return (string) $value;
    }
}
