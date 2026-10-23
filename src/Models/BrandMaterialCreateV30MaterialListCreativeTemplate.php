<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandMaterialCreateV30MaterialListCreativeTemplate
{
    public const DOUYIN_CONTENT_PLANT_GRASS_AD_NORMAL_BrandMaterialCreateV30MaterialListCreativeTemplate = 'DouyinContentPlantGrassAdNormal';
    public const DOUYIN_CONTENT_PLANT_GRASS_AD_SEARCH_EXPLORE_BrandMaterialCreateV30MaterialListCreativeTemplate = 'DouyinContentPlantGrassAdSearchExplore';
    public const DOUYIN_CONTENT_PLANT_GRASS_AD_SEARCH_IMAGE_BrandMaterialCreateV30MaterialListCreativeTemplate = 'DouyinContentPlantGrassAdSearchImage';
    public const DOUYIN_CONTENT_PLANT_GRASS_AD_SEARCHD_IMAGE_BrandMaterialCreateV30MaterialListCreativeTemplate = 'DouyinContentPlantGrassAdSearchdImage';
    public const DOUYIN_CONTENT_PLANT_GRASS_NORMAL_BrandMaterialCreateV30MaterialListCreativeTemplate = 'DouyinContentPlantGrassNormal';
    public const DOUYIN_CONTENT_PLANT_GRASS_SEARCH_BrandMaterialCreateV30MaterialListCreativeTemplate = 'DouyinContentPlantGrassSearch';
    public const DOUYIN_CONTENT_PLANT_GRASS_TEST_OFFLINE_BrandMaterialCreateV30MaterialListCreativeTemplate = 'DouyinContentPlantGrassTestOffline';
    public const DOUYIN_FEED_EXTERNAL_CARD_BrandMaterialCreateV30MaterialListCreativeTemplate = 'DouyinFeedExternalCard';
    public const DOUYIN_FEED_EXTERNAL_NORMAL_BrandMaterialCreateV30MaterialListCreativeTemplate = 'DouyinFeedExternalNormal';
    public const DOUYIN_FEED_NATIVE_CARD_BrandMaterialCreateV30MaterialListCreativeTemplate = 'DouyinFeedNativeCard';
    public const DOUYIN_FEED_NATIVE_NORMAL_BrandMaterialCreateV30MaterialListCreativeTemplate = 'DouyinFeedNativeNormal';

    public const ALLOWED_VALUES = [
        self::DOUYIN_CONTENT_PLANT_GRASS_AD_NORMAL_BrandMaterialCreateV30MaterialListCreativeTemplate,
        self::DOUYIN_CONTENT_PLANT_GRASS_AD_SEARCH_EXPLORE_BrandMaterialCreateV30MaterialListCreativeTemplate,
        self::DOUYIN_CONTENT_PLANT_GRASS_AD_SEARCH_IMAGE_BrandMaterialCreateV30MaterialListCreativeTemplate,
        self::DOUYIN_CONTENT_PLANT_GRASS_AD_SEARCHD_IMAGE_BrandMaterialCreateV30MaterialListCreativeTemplate,
        self::DOUYIN_CONTENT_PLANT_GRASS_NORMAL_BrandMaterialCreateV30MaterialListCreativeTemplate,
        self::DOUYIN_CONTENT_PLANT_GRASS_SEARCH_BrandMaterialCreateV30MaterialListCreativeTemplate,
        self::DOUYIN_CONTENT_PLANT_GRASS_TEST_OFFLINE_BrandMaterialCreateV30MaterialListCreativeTemplate,
        self::DOUYIN_FEED_EXTERNAL_CARD_BrandMaterialCreateV30MaterialListCreativeTemplate,
        self::DOUYIN_FEED_EXTERNAL_NORMAL_BrandMaterialCreateV30MaterialListCreativeTemplate,
        self::DOUYIN_FEED_NATIVE_CARD_BrandMaterialCreateV30MaterialListCreativeTemplate,
        self::DOUYIN_FEED_NATIVE_NORMAL_BrandMaterialCreateV30MaterialListCreativeTemplate,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandMaterialCreateV30MaterialListCreativeTemplate', $value));
        }
        return (string) $value;
    }
}
