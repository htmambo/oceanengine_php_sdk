<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandOrderListV30DataOrdersAdForm
{
    public const AWEME_LBS_BrandOrderListV30DataOrdersAdForm = 'AWEME_LBS';
    public const CONTENTRECOMMEND_BrandOrderListV30DataOrdersAdForm = 'CONTENTRECOMMEND';
    public const CONTENTRECOMMEND_NO_GRASS_BrandOrderListV30DataOrdersAdForm = 'CONTENTRECOMMEND_NO_GRASS';
    public const CONTENTSERVICE_BrandOrderListV30DataOrdersAdForm = 'CONTENTSERVICE';
    public const CONTENTSERVICE_NO_GRASS_BrandOrderListV30DataOrdersAdForm = 'CONTENTSERVICE_NO_GRASS';
    public const FEED_BrandOrderListV30DataOrdersAdForm = 'FEED';
    public const FEEDSLIVE_BrandOrderListV30DataOrdersAdForm = 'FEEDSLIVE';
    public const FEEDSLIVE_AD_BrandOrderListV30DataOrdersAdForm = 'FEEDSLIVE_AD';
    public const FEEDSLIVE_SERVICE_BrandOrderListV30DataOrdersAdForm = 'FEEDSLIVE_SERVICE';
    public const NEW_PLANT_GRASS_BrandOrderListV30DataOrdersAdForm = 'NEW_PLANT_GRASS';
    public const SEARCH_BrandOrderListV30DataOrdersAdForm = 'SEARCH';
    public const SPLASH_BrandOrderListV30DataOrdersAdForm = 'SPLASH';
    public const VIDEOLIVE_AD_BrandOrderListV30DataOrdersAdForm = 'VIDEOLIVE_AD';
    public const VIDEOLIVE_SERVICE_BrandOrderListV30DataOrdersAdForm = 'VIDEOLIVE_SERVICE';

    public const ALLOWED_VALUES = [
        self::AWEME_LBS_BrandOrderListV30DataOrdersAdForm,
        self::CONTENTRECOMMEND_BrandOrderListV30DataOrdersAdForm,
        self::CONTENTRECOMMEND_NO_GRASS_BrandOrderListV30DataOrdersAdForm,
        self::CONTENTSERVICE_BrandOrderListV30DataOrdersAdForm,
        self::CONTENTSERVICE_NO_GRASS_BrandOrderListV30DataOrdersAdForm,
        self::FEED_BrandOrderListV30DataOrdersAdForm,
        self::FEEDSLIVE_BrandOrderListV30DataOrdersAdForm,
        self::FEEDSLIVE_AD_BrandOrderListV30DataOrdersAdForm,
        self::FEEDSLIVE_SERVICE_BrandOrderListV30DataOrdersAdForm,
        self::NEW_PLANT_GRASS_BrandOrderListV30DataOrdersAdForm,
        self::SEARCH_BrandOrderListV30DataOrdersAdForm,
        self::SPLASH_BrandOrderListV30DataOrdersAdForm,
        self::VIDEOLIVE_AD_BrandOrderListV30DataOrdersAdForm,
        self::VIDEOLIVE_SERVICE_BrandOrderListV30DataOrdersAdForm,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandOrderListV30DataOrdersAdForm', $value));
        }
        return (string) $value;
    }
}
