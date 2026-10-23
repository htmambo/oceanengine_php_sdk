<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StarDemandListV2FilteringComponentType
{
    public const ALL_StarDemandListV2FilteringComponentType = 'ALL';
    public const ANCHOR_CAR_StarDemandListV2FilteringComponentType = 'ANCHOR_CAR';
    public const ANCHOR_DOWNLOAD_StarDemandListV2FilteringComponentType = 'ANCHOR_DOWNLOAD';
    public const ANCHOR_ECOM_StarDemandListV2FilteringComponentType = 'ANCHOR_ECOM';
    public const ANCHOR_EDUCATION_StarDemandListV2FilteringComponentType = 'ANCHOR_EDUCATION';
    public const ANCHOR_ESTATE_SERVICE_StarDemandListV2FilteringComponentType = 'ANCHOR_ESTATE_SERVICE';
    public const ANCHOR_E_GAME_StarDemandListV2FilteringComponentType = 'ANCHOR_E_GAME';
    public const ANCHOR_HOME_StarDemandListV2FilteringComponentType = 'ANCHOR_HOME';
    public const ANCHOR_INSURANCE_StarDemandListV2FilteringComponentType = 'ANCHOR_INSURANCE';
    public const ANCHOR_INVESTMENT_StarDemandListV2FilteringComponentType = 'ANCHOR_INVESTMENT';
    public const ANCHOR_MICRO_APP_POI_StarDemandListV2FilteringComponentType = 'ANCHOR_MICRO_APP_POI';
    public const ANCHOR_MOVIE_StarDemandListV2FilteringComponentType = 'ANCHOR_MOVIE';
    public const ANCHOR_TELECOM_StarDemandListV2FilteringComponentType = 'ANCHOR_TELECOM';
    public const ANCHOR_TOURISM_StarDemandListV2FilteringComponentType = 'ANCHOR_TOURISM';
    public const ANCHOR_XIGUA_StarDemandListV2FilteringComponentType = 'ANCHOR_XIGUA';
    public const BRAND_ANCHOR_StarDemandListV2FilteringComponentType = 'BRAND_ANCHOR';
    public const CART_StarDemandListV2FilteringComponentType = 'CART';
    public const ENTERPRISE_CAR_StarDemandListV2FilteringComponentType = 'ENTERPRISE_CAR';
    public const ENTERPRISE_COUPON_StarDemandListV2FilteringComponentType = 'ENTERPRISE_COUPON';
    public const ENTERPRISE_DOWNLOAD_StarDemandListV2FilteringComponentType = 'ENTERPRISE_DOWNLOAD';
    public const ENTERPRISE_DOWNLOAD_APP_StarDemandListV2FilteringComponentType = 'ENTERPRISE_DOWNLOAD_APP';
    public const ENTERPRISE_ECOM_StarDemandListV2FilteringComponentType = 'ENTERPRISE_ECOM';
    public const ENTERPRISE_MICRO_APP_StarDemandListV2FilteringComponentType = 'ENTERPRISE_MICRO_APP';
    public const ENTERPRISE_NOVEL_StarDemandListV2FilteringComponentType = 'ENTERPRISE_NOVEL';
    public const ENTERPRISE_ORDER_SERVICE_StarDemandListV2FilteringComponentType = 'ENTERPRISE_ORDER_SERVICE';
    public const ENTERPRISE_SALON_StarDemandListV2FilteringComponentType = 'ENTERPRISE_SALON';
    public const ENTERPRISE_WEDDING_PHOTO_StarDemandListV2FilteringComponentType = 'ENTERPRISE_WEDDING_PHOTO';
    public const GAME_ANCHOR_StarDemandListV2FilteringComponentType = 'GAME_ANCHOR';
    public const LINK_StarDemandListV2FilteringComponentType = 'LINK';
    public const LIVE_ORDER_COMPONENT_StarDemandListV2FilteringComponentType = 'LIVE_ORDER_COMPONENT';
    public const MICROAPP_ANCHOR_StarDemandListV2FilteringComponentType = 'MICROAPP_ANCHOR';
    public const POI_StarDemandListV2FilteringComponentType = 'POI';
    public const VARIETY_ANCHOR_StarDemandListV2FilteringComponentType = 'VARIETY_ANCHOR';

    public const ALLOWED_VALUES = [
        self::ALL_StarDemandListV2FilteringComponentType,
        self::ANCHOR_CAR_StarDemandListV2FilteringComponentType,
        self::ANCHOR_DOWNLOAD_StarDemandListV2FilteringComponentType,
        self::ANCHOR_ECOM_StarDemandListV2FilteringComponentType,
        self::ANCHOR_EDUCATION_StarDemandListV2FilteringComponentType,
        self::ANCHOR_ESTATE_SERVICE_StarDemandListV2FilteringComponentType,
        self::ANCHOR_E_GAME_StarDemandListV2FilteringComponentType,
        self::ANCHOR_HOME_StarDemandListV2FilteringComponentType,
        self::ANCHOR_INSURANCE_StarDemandListV2FilteringComponentType,
        self::ANCHOR_INVESTMENT_StarDemandListV2FilteringComponentType,
        self::ANCHOR_MICRO_APP_POI_StarDemandListV2FilteringComponentType,
        self::ANCHOR_MOVIE_StarDemandListV2FilteringComponentType,
        self::ANCHOR_TELECOM_StarDemandListV2FilteringComponentType,
        self::ANCHOR_TOURISM_StarDemandListV2FilteringComponentType,
        self::ANCHOR_XIGUA_StarDemandListV2FilteringComponentType,
        self::BRAND_ANCHOR_StarDemandListV2FilteringComponentType,
        self::CART_StarDemandListV2FilteringComponentType,
        self::ENTERPRISE_CAR_StarDemandListV2FilteringComponentType,
        self::ENTERPRISE_COUPON_StarDemandListV2FilteringComponentType,
        self::ENTERPRISE_DOWNLOAD_StarDemandListV2FilteringComponentType,
        self::ENTERPRISE_DOWNLOAD_APP_StarDemandListV2FilteringComponentType,
        self::ENTERPRISE_ECOM_StarDemandListV2FilteringComponentType,
        self::ENTERPRISE_MICRO_APP_StarDemandListV2FilteringComponentType,
        self::ENTERPRISE_NOVEL_StarDemandListV2FilteringComponentType,
        self::ENTERPRISE_ORDER_SERVICE_StarDemandListV2FilteringComponentType,
        self::ENTERPRISE_SALON_StarDemandListV2FilteringComponentType,
        self::ENTERPRISE_WEDDING_PHOTO_StarDemandListV2FilteringComponentType,
        self::GAME_ANCHOR_StarDemandListV2FilteringComponentType,
        self::LINK_StarDemandListV2FilteringComponentType,
        self::LIVE_ORDER_COMPONENT_StarDemandListV2FilteringComponentType,
        self::MICROAPP_ANCHOR_StarDemandListV2FilteringComponentType,
        self::POI_StarDemandListV2FilteringComponentType,
        self::VARIETY_ANCHOR_StarDemandListV2FilteringComponentType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StarDemandListV2FilteringComponentType', $value));
        }
        return (string) $value;
    }
}
