<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanReportAdvertiserGetV10FilteringCampaignScene
{
    public const DAILY_SALE_QianchuanReportAdvertiserGetV10FilteringCampaignScene = 'DAILY_SALE';
    public const LIVE_HEAT_QianchuanReportAdvertiserGetV10FilteringCampaignScene = 'LIVE_HEAT';
    public const NEW_CUSTOMER_TRANSFORMATION_QianchuanReportAdvertiserGetV10FilteringCampaignScene = 'NEW_CUSTOMER_TRANSFORMATION';
    public const NEW_PRODUCT_BOOST_QianchuanReportAdvertiserGetV10FilteringCampaignScene = 'NEW_PRODUCT_BOOST';
    public const PLANT_GRASS_QianchuanReportAdvertiserGetV10FilteringCampaignScene = 'PLANT_GRASS';
    public const PRODUCT_HEAT_QianchuanReportAdvertiserGetV10FilteringCampaignScene = 'PRODUCT_HEAT';

    public const ALLOWED_VALUES = [
        self::DAILY_SALE_QianchuanReportAdvertiserGetV10FilteringCampaignScene,
        self::LIVE_HEAT_QianchuanReportAdvertiserGetV10FilteringCampaignScene,
        self::NEW_CUSTOMER_TRANSFORMATION_QianchuanReportAdvertiserGetV10FilteringCampaignScene,
        self::NEW_PRODUCT_BOOST_QianchuanReportAdvertiserGetV10FilteringCampaignScene,
        self::PLANT_GRASS_QianchuanReportAdvertiserGetV10FilteringCampaignScene,
        self::PRODUCT_HEAT_QianchuanReportAdvertiserGetV10FilteringCampaignScene,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanReportAdvertiserGetV10FilteringCampaignScene', $value));
        }
        return (string) $value;
    }
}
