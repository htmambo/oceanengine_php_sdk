<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanProductAvailableGetV10CampaignScene
{
    public const DAILY_SALE_QianchuanProductAvailableGetV10CampaignScene = 'DAILY_SALE';
    public const LIVE_HEAT_QianchuanProductAvailableGetV10CampaignScene = 'LIVE_HEAT';
    public const NEW_CUSTOMER_TRANSFORMATION_QianchuanProductAvailableGetV10CampaignScene = 'NEW_CUSTOMER_TRANSFORMATION';
    public const NEW_PRODUCT_BOOST_QianchuanProductAvailableGetV10CampaignScene = 'NEW_PRODUCT_BOOST';
    public const PLANT_GRASS_QianchuanProductAvailableGetV10CampaignScene = 'PLANT_GRASS';
    public const PRODUCT_HEAT_QianchuanProductAvailableGetV10CampaignScene = 'PRODUCT_HEAT';

    public const ALLOWED_VALUES = [
        self::DAILY_SALE_QianchuanProductAvailableGetV10CampaignScene,
        self::LIVE_HEAT_QianchuanProductAvailableGetV10CampaignScene,
        self::NEW_CUSTOMER_TRANSFORMATION_QianchuanProductAvailableGetV10CampaignScene,
        self::NEW_PRODUCT_BOOST_QianchuanProductAvailableGetV10CampaignScene,
        self::PLANT_GRASS_QianchuanProductAvailableGetV10CampaignScene,
        self::PRODUCT_HEAT_QianchuanProductAvailableGetV10CampaignScene,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanProductAvailableGetV10CampaignScene', $value));
        }
        return (string) $value;
    }
}
