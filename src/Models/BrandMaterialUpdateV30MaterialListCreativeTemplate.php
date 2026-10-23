<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandMaterialUpdateV30MaterialListCreativeTemplate
{
    public const DOUYIN_CONTENT_PLANT_GRASS_AD_NORMAL_BrandMaterialUpdateV30MaterialListCreativeTemplate = 'DouyinContentPlantGrassAdNormal';
    public const DOUYIN_CONTENT_PLANT_GRASS_AD_SEARCH_EXPLORE_BrandMaterialUpdateV30MaterialListCreativeTemplate = 'DouyinContentPlantGrassAdSearchExplore';
    public const DOUYIN_CONTENT_PLANT_GRASS_AD_SEARCH_IMAGE_BrandMaterialUpdateV30MaterialListCreativeTemplate = 'DouyinContentPlantGrassAdSearchImage';
    public const DOUYIN_CONTENT_PLANT_GRASS_AD_SEARCHD_IMAGE_BrandMaterialUpdateV30MaterialListCreativeTemplate = 'DouyinContentPlantGrassAdSearchdImage';
    public const DOUYIN_CONTENT_PLANT_GRASS_NORMAL_BrandMaterialUpdateV30MaterialListCreativeTemplate = 'DouyinContentPlantGrassNormal';
    public const DOUYIN_CONTENT_PLANT_GRASS_SEARCH_BrandMaterialUpdateV30MaterialListCreativeTemplate = 'DouyinContentPlantGrassSearch';
    public const DOUYIN_CONTENT_PLANT_GRASS_TEST_OFFLINE_BrandMaterialUpdateV30MaterialListCreativeTemplate = 'DouyinContentPlantGrassTestOffline';
    public const DOUYIN_FEED_EXTERNAL_CARD_BrandMaterialUpdateV30MaterialListCreativeTemplate = 'DouyinFeedExternalCard';
    public const DOUYIN_FEED_EXTERNAL_NORMAL_BrandMaterialUpdateV30MaterialListCreativeTemplate = 'DouyinFeedExternalNormal';
    public const DOUYIN_FEED_NATIVE_CARD_BrandMaterialUpdateV30MaterialListCreativeTemplate = 'DouyinFeedNativeCard';
    public const DOUYIN_FEED_NATIVE_NORMAL_BrandMaterialUpdateV30MaterialListCreativeTemplate = 'DouyinFeedNativeNormal';

    public const ALLOWED_VALUES = [
        self::DOUYIN_CONTENT_PLANT_GRASS_AD_NORMAL_BrandMaterialUpdateV30MaterialListCreativeTemplate,
        self::DOUYIN_CONTENT_PLANT_GRASS_AD_SEARCH_EXPLORE_BrandMaterialUpdateV30MaterialListCreativeTemplate,
        self::DOUYIN_CONTENT_PLANT_GRASS_AD_SEARCH_IMAGE_BrandMaterialUpdateV30MaterialListCreativeTemplate,
        self::DOUYIN_CONTENT_PLANT_GRASS_AD_SEARCHD_IMAGE_BrandMaterialUpdateV30MaterialListCreativeTemplate,
        self::DOUYIN_CONTENT_PLANT_GRASS_NORMAL_BrandMaterialUpdateV30MaterialListCreativeTemplate,
        self::DOUYIN_CONTENT_PLANT_GRASS_SEARCH_BrandMaterialUpdateV30MaterialListCreativeTemplate,
        self::DOUYIN_CONTENT_PLANT_GRASS_TEST_OFFLINE_BrandMaterialUpdateV30MaterialListCreativeTemplate,
        self::DOUYIN_FEED_EXTERNAL_CARD_BrandMaterialUpdateV30MaterialListCreativeTemplate,
        self::DOUYIN_FEED_EXTERNAL_NORMAL_BrandMaterialUpdateV30MaterialListCreativeTemplate,
        self::DOUYIN_FEED_NATIVE_CARD_BrandMaterialUpdateV30MaterialListCreativeTemplate,
        self::DOUYIN_FEED_NATIVE_NORMAL_BrandMaterialUpdateV30MaterialListCreativeTemplate,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandMaterialUpdateV30MaterialListCreativeTemplate', $value));
        }
        return (string) $value;
    }
}
