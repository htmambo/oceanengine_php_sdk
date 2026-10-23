<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandOrderListV30FilterAdForm
{
    public const AWEME_LBS_BrandOrderListV30FilterAdForm = 'AWEME_LBS';
    public const CONTENTRECOMMEND_BrandOrderListV30FilterAdForm = 'CONTENTRECOMMEND';
    public const CONTENTRECOMMEND_NO_GRASS_BrandOrderListV30FilterAdForm = 'CONTENTRECOMMEND_NO_GRASS';
    public const CONTENTSERVICE_BrandOrderListV30FilterAdForm = 'CONTENTSERVICE';
    public const CONTENTSERVICE_NO_GRASS_BrandOrderListV30FilterAdForm = 'CONTENTSERVICE_NO_GRASS';
    public const FEED_BrandOrderListV30FilterAdForm = 'FEED';
    public const FEEDSLIVE_BrandOrderListV30FilterAdForm = 'FEEDSLIVE';
    public const FEEDSLIVE_AD_BrandOrderListV30FilterAdForm = 'FEEDSLIVE_AD';
    public const FEEDSLIVE_SERVICE_BrandOrderListV30FilterAdForm = 'FEEDSLIVE_SERVICE';
    public const LITE_FEED_BrandOrderListV30FilterAdForm = 'LITE_FEED';
    public const NEW_PLANT_GRASS_BrandOrderListV30FilterAdForm = 'NEW_PLANT_GRASS';
    public const SEARCH_BrandOrderListV30FilterAdForm = 'SEARCH';
    public const SPLASH_BrandOrderListV30FilterAdForm = 'SPLASH';
    public const VIDEOLIVE_AD_BrandOrderListV30FilterAdForm = 'VIDEOLIVE_AD';
    public const VIDEOLIVE_SERVICE_BrandOrderListV30FilterAdForm = 'VIDEOLIVE_SERVICE';

    public const ALLOWED_VALUES = [
        self::AWEME_LBS_BrandOrderListV30FilterAdForm,
        self::CONTENTRECOMMEND_BrandOrderListV30FilterAdForm,
        self::CONTENTRECOMMEND_NO_GRASS_BrandOrderListV30FilterAdForm,
        self::CONTENTSERVICE_BrandOrderListV30FilterAdForm,
        self::CONTENTSERVICE_NO_GRASS_BrandOrderListV30FilterAdForm,
        self::FEED_BrandOrderListV30FilterAdForm,
        self::FEEDSLIVE_BrandOrderListV30FilterAdForm,
        self::FEEDSLIVE_AD_BrandOrderListV30FilterAdForm,
        self::FEEDSLIVE_SERVICE_BrandOrderListV30FilterAdForm,
        self::LITE_FEED_BrandOrderListV30FilterAdForm,
        self::NEW_PLANT_GRASS_BrandOrderListV30FilterAdForm,
        self::SEARCH_BrandOrderListV30FilterAdForm,
        self::SPLASH_BrandOrderListV30FilterAdForm,
        self::VIDEOLIVE_AD_BrandOrderListV30FilterAdForm,
        self::VIDEOLIVE_SERVICE_BrandOrderListV30FilterAdForm,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandOrderListV30FilterAdForm', $value));
        }
        return (string) $value;
    }
}
