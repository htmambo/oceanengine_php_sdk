<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StarDemandListV2DataListComponentType
{
    public const ALL_StarDemandListV2DataListComponentType = 'ALL';
    public const ANCHOR_CAR_StarDemandListV2DataListComponentType = 'ANCHOR_CAR';
    public const ANCHOR_DOWNLOAD_StarDemandListV2DataListComponentType = 'ANCHOR_DOWNLOAD';
    public const ANCHOR_ECOM_StarDemandListV2DataListComponentType = 'ANCHOR_ECOM';
    public const ANCHOR_EDUCATION_StarDemandListV2DataListComponentType = 'ANCHOR_EDUCATION';
    public const ANCHOR_ESTATE_SERVICE_StarDemandListV2DataListComponentType = 'ANCHOR_ESTATE_SERVICE';
    public const ANCHOR_E_GAME_StarDemandListV2DataListComponentType = 'ANCHOR_E_GAME';
    public const ANCHOR_HOME_StarDemandListV2DataListComponentType = 'ANCHOR_HOME';
    public const ANCHOR_INSURANCE_StarDemandListV2DataListComponentType = 'ANCHOR_INSURANCE';
    public const ANCHOR_INVESTMENT_StarDemandListV2DataListComponentType = 'ANCHOR_INVESTMENT';
    public const ANCHOR_MICRO_APP_POI_StarDemandListV2DataListComponentType = 'ANCHOR_MICRO_APP_POI';
    public const ANCHOR_MOVIE_StarDemandListV2DataListComponentType = 'ANCHOR_MOVIE';
    public const ANCHOR_TELECOM_StarDemandListV2DataListComponentType = 'ANCHOR_TELECOM';
    public const ANCHOR_TOURISM_StarDemandListV2DataListComponentType = 'ANCHOR_TOURISM';
    public const ANCHOR_XIGUA_StarDemandListV2DataListComponentType = 'ANCHOR_XIGUA';
    public const BRAND_ANCHOR_StarDemandListV2DataListComponentType = 'BRAND_ANCHOR';
    public const CART_StarDemandListV2DataListComponentType = 'CART';
    public const ENTERPRISE_CAR_StarDemandListV2DataListComponentType = 'ENTERPRISE_CAR';
    public const ENTERPRISE_COUPON_StarDemandListV2DataListComponentType = 'ENTERPRISE_COUPON';
    public const ENTERPRISE_DOWNLOAD_StarDemandListV2DataListComponentType = 'ENTERPRISE_DOWNLOAD';
    public const ENTERPRISE_DOWNLOAD_APP_StarDemandListV2DataListComponentType = 'ENTERPRISE_DOWNLOAD_APP';
    public const ENTERPRISE_ECOM_StarDemandListV2DataListComponentType = 'ENTERPRISE_ECOM';
    public const ENTERPRISE_MICRO_APP_StarDemandListV2DataListComponentType = 'ENTERPRISE_MICRO_APP';
    public const ENTERPRISE_NOVEL_StarDemandListV2DataListComponentType = 'ENTERPRISE_NOVEL';
    public const ENTERPRISE_ORDER_SERVICE_StarDemandListV2DataListComponentType = 'ENTERPRISE_ORDER_SERVICE';
    public const ENTERPRISE_SALON_StarDemandListV2DataListComponentType = 'ENTERPRISE_SALON';
    public const ENTERPRISE_WEDDING_PHOTO_StarDemandListV2DataListComponentType = 'ENTERPRISE_WEDDING_PHOTO';
    public const GAME_ANCHOR_StarDemandListV2DataListComponentType = 'GAME_ANCHOR';
    public const LINK_StarDemandListV2DataListComponentType = 'LINK';
    public const LIVE_ORDER_COMPONENT_StarDemandListV2DataListComponentType = 'LIVE_ORDER_COMPONENT';
    public const MICROAPP_ANCHOR_StarDemandListV2DataListComponentType = 'MICROAPP_ANCHOR';
    public const POI_StarDemandListV2DataListComponentType = 'POI';
    public const VARIETY_ANCHOR_StarDemandListV2DataListComponentType = 'VARIETY_ANCHOR';

    public const ALLOWED_VALUES = [
        self::ALL_StarDemandListV2DataListComponentType,
        self::ANCHOR_CAR_StarDemandListV2DataListComponentType,
        self::ANCHOR_DOWNLOAD_StarDemandListV2DataListComponentType,
        self::ANCHOR_ECOM_StarDemandListV2DataListComponentType,
        self::ANCHOR_EDUCATION_StarDemandListV2DataListComponentType,
        self::ANCHOR_ESTATE_SERVICE_StarDemandListV2DataListComponentType,
        self::ANCHOR_E_GAME_StarDemandListV2DataListComponentType,
        self::ANCHOR_HOME_StarDemandListV2DataListComponentType,
        self::ANCHOR_INSURANCE_StarDemandListV2DataListComponentType,
        self::ANCHOR_INVESTMENT_StarDemandListV2DataListComponentType,
        self::ANCHOR_MICRO_APP_POI_StarDemandListV2DataListComponentType,
        self::ANCHOR_MOVIE_StarDemandListV2DataListComponentType,
        self::ANCHOR_TELECOM_StarDemandListV2DataListComponentType,
        self::ANCHOR_TOURISM_StarDemandListV2DataListComponentType,
        self::ANCHOR_XIGUA_StarDemandListV2DataListComponentType,
        self::BRAND_ANCHOR_StarDemandListV2DataListComponentType,
        self::CART_StarDemandListV2DataListComponentType,
        self::ENTERPRISE_CAR_StarDemandListV2DataListComponentType,
        self::ENTERPRISE_COUPON_StarDemandListV2DataListComponentType,
        self::ENTERPRISE_DOWNLOAD_StarDemandListV2DataListComponentType,
        self::ENTERPRISE_DOWNLOAD_APP_StarDemandListV2DataListComponentType,
        self::ENTERPRISE_ECOM_StarDemandListV2DataListComponentType,
        self::ENTERPRISE_MICRO_APP_StarDemandListV2DataListComponentType,
        self::ENTERPRISE_NOVEL_StarDemandListV2DataListComponentType,
        self::ENTERPRISE_ORDER_SERVICE_StarDemandListV2DataListComponentType,
        self::ENTERPRISE_SALON_StarDemandListV2DataListComponentType,
        self::ENTERPRISE_WEDDING_PHOTO_StarDemandListV2DataListComponentType,
        self::GAME_ANCHOR_StarDemandListV2DataListComponentType,
        self::LINK_StarDemandListV2DataListComponentType,
        self::LIVE_ORDER_COMPONENT_StarDemandListV2DataListComponentType,
        self::MICROAPP_ANCHOR_StarDemandListV2DataListComponentType,
        self::POI_StarDemandListV2DataListComponentType,
        self::VARIETY_ANCHOR_StarDemandListV2DataListComponentType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StarDemandListV2DataListComponentType', $value));
        }
        return (string) $value;
    }
}
