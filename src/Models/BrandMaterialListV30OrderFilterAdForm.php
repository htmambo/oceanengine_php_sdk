<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandMaterialListV30OrderFilterAdForm
{
    public const AWEME_LBS_BrandMaterialListV30OrderFilterAdForm = 'AWEME_LBS';
    public const CONTENTRECOMMEND_BrandMaterialListV30OrderFilterAdForm = 'CONTENTRECOMMEND';
    public const CONTENTRECOMMEND_NO_GRASS_BrandMaterialListV30OrderFilterAdForm = 'CONTENTRECOMMEND_NO_GRASS';
    public const CONTENTSERVICE_BrandMaterialListV30OrderFilterAdForm = 'CONTENTSERVICE';
    public const CONTENTSERVICE_NO_GRASS_BrandMaterialListV30OrderFilterAdForm = 'CONTENTSERVICE_NO_GRASS';
    public const FEED_BrandMaterialListV30OrderFilterAdForm = 'FEED';
    public const FEEDSLIVE_BrandMaterialListV30OrderFilterAdForm = 'FEEDSLIVE';
    public const FEEDSLIVE_AD_BrandMaterialListV30OrderFilterAdForm = 'FEEDSLIVE_AD';
    public const FEEDSLIVE_SERVICE_BrandMaterialListV30OrderFilterAdForm = 'FEEDSLIVE_SERVICE';
    public const NEW_PLANT_GRASS_BrandMaterialListV30OrderFilterAdForm = 'NEW_PLANT_GRASS';
    public const SEARCH_BrandMaterialListV30OrderFilterAdForm = 'SEARCH';
    public const SPLASH_BrandMaterialListV30OrderFilterAdForm = 'SPLASH';
    public const VIDEOLIVE_AD_BrandMaterialListV30OrderFilterAdForm = 'VIDEOLIVE_AD';
    public const VIDEOLIVE_SERVICE_BrandMaterialListV30OrderFilterAdForm = 'VIDEOLIVE_SERVICE';

    public const ALLOWED_VALUES = [
        self::AWEME_LBS_BrandMaterialListV30OrderFilterAdForm,
        self::CONTENTRECOMMEND_BrandMaterialListV30OrderFilterAdForm,
        self::CONTENTRECOMMEND_NO_GRASS_BrandMaterialListV30OrderFilterAdForm,
        self::CONTENTSERVICE_BrandMaterialListV30OrderFilterAdForm,
        self::CONTENTSERVICE_NO_GRASS_BrandMaterialListV30OrderFilterAdForm,
        self::FEED_BrandMaterialListV30OrderFilterAdForm,
        self::FEEDSLIVE_BrandMaterialListV30OrderFilterAdForm,
        self::FEEDSLIVE_AD_BrandMaterialListV30OrderFilterAdForm,
        self::FEEDSLIVE_SERVICE_BrandMaterialListV30OrderFilterAdForm,
        self::NEW_PLANT_GRASS_BrandMaterialListV30OrderFilterAdForm,
        self::SEARCH_BrandMaterialListV30OrderFilterAdForm,
        self::SPLASH_BrandMaterialListV30OrderFilterAdForm,
        self::VIDEOLIVE_AD_BrandMaterialListV30OrderFilterAdForm,
        self::VIDEOLIVE_SERVICE_BrandMaterialListV30OrderFilterAdForm,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandMaterialListV30OrderFilterAdForm', $value));
        }
        return (string) $value;
    }
}
