<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionListV30DataListPromotionRelatedProductImageMaterialListImageMode
{
    public const AWEME_PHOTO_PromotionListV30DataListPromotionRelatedProductImageMaterialListImageMode = 'AWEME_PHOTO';
    public const CREATIVE_IMAGE_MODE_AWEME_LIVE_PromotionListV30DataListPromotionRelatedProductImageMaterialListImageMode = 'CREATIVE_IMAGE_MODE_AWEME_LIVE';
    public const CREATIVE_IMAGE_MODE_CALIBRATION_FREE_SINGLE_IMAGE_PromotionListV30DataListPromotionRelatedProductImageMaterialListImageMode = 'CREATIVE_IMAGE_MODE_CALIBRATION_FREE_SINGLE_IMAGE';
    public const CREATIVE_IMAGE_MODE_CALIBRATION_FREE_VIDEO_PromotionListV30DataListPromotionRelatedProductImageMaterialListImageMode = 'CREATIVE_IMAGE_MODE_CALIBRATION_FREE_VIDEO';
    public const CREATIVE_IMAGE_MODE_DISPLAY_WINDOW_PromotionListV30DataListPromotionRelatedProductImageMaterialListImageMode = 'CREATIVE_IMAGE_MODE_DISPLAY_WINDOW';
    public const CREATIVE_IMAGE_MODE_GIF_PromotionListV30DataListPromotionRelatedProductImageMaterialListImageMode = 'CREATIVE_IMAGE_MODE_GIF';
    public const CREATIVE_IMAGE_MODE_GROUP_PromotionListV30DataListPromotionRelatedProductImageMaterialListImageMode = 'CREATIVE_IMAGE_MODE_GROUP';
    public const CREATIVE_IMAGE_MODE_LARGE_PromotionListV30DataListPromotionRelatedProductImageMaterialListImageMode = 'CREATIVE_IMAGE_MODE_LARGE';
    public const CREATIVE_IMAGE_MODE_LARGE_VERTICAL_PromotionListV30DataListPromotionRelatedProductImageMaterialListImageMode = 'CREATIVE_IMAGE_MODE_LARGE_VERTICAL';
    public const CREATIVE_IMAGE_MODE_PLAYABLE_HORIZONTAL_PromotionListV30DataListPromotionRelatedProductImageMaterialListImageMode = 'CREATIVE_IMAGE_MODE_PLAYABLE_HORIZONTAL';
    public const CREATIVE_IMAGE_MODE_PLAYABLE_VERTICAL_PromotionListV30DataListPromotionRelatedProductImageMaterialListImageMode = 'CREATIVE_IMAGE_MODE_PLAYABLE_VERTICAL';
    public const CREATIVE_IMAGE_MODE_SMALL_PromotionListV30DataListPromotionRelatedProductImageMaterialListImageMode = 'CREATIVE_IMAGE_MODE_SMALL';
    public const CREATIVE_IMAGE_MODE_UNION_SPLASH_PromotionListV30DataListPromotionRelatedProductImageMaterialListImageMode = 'CREATIVE_IMAGE_MODE_UNION_SPLASH';
    public const CREATIVE_IMAGE_MODE_UNION_SPLASH_VIDEO_PromotionListV30DataListPromotionRelatedProductImageMaterialListImageMode = 'CREATIVE_IMAGE_MODE_UNION_SPLASH_VIDEO';
    public const CREATIVE_IMAGE_MODE_VIDEO_PromotionListV30DataListPromotionRelatedProductImageMaterialListImageMode = 'CREATIVE_IMAGE_MODE_VIDEO';
    public const CREATIVE_IMAGE_MODE_VIDEO_VERTICAL_PromotionListV30DataListPromotionRelatedProductImageMaterialListImageMode = 'CREATIVE_IMAGE_MODE_VIDEO_VERTICAL';
    public const SEARCH_AD_SMALL_IMAGE_PromotionListV30DataListPromotionRelatedProductImageMaterialListImageMode = 'SEARCH_AD_SMALL_IMAGE';
    public const TOUTIAO_SEARCH_AD_IMAGE_PromotionListV30DataListPromotionRelatedProductImageMaterialListImageMode = 'TOUTIAO_SEARCH_AD_IMAGE';

    public const ALLOWED_VALUES = [
        self::AWEME_PHOTO_PromotionListV30DataListPromotionRelatedProductImageMaterialListImageMode,
        self::CREATIVE_IMAGE_MODE_AWEME_LIVE_PromotionListV30DataListPromotionRelatedProductImageMaterialListImageMode,
        self::CREATIVE_IMAGE_MODE_CALIBRATION_FREE_SINGLE_IMAGE_PromotionListV30DataListPromotionRelatedProductImageMaterialListImageMode,
        self::CREATIVE_IMAGE_MODE_CALIBRATION_FREE_VIDEO_PromotionListV30DataListPromotionRelatedProductImageMaterialListImageMode,
        self::CREATIVE_IMAGE_MODE_DISPLAY_WINDOW_PromotionListV30DataListPromotionRelatedProductImageMaterialListImageMode,
        self::CREATIVE_IMAGE_MODE_GIF_PromotionListV30DataListPromotionRelatedProductImageMaterialListImageMode,
        self::CREATIVE_IMAGE_MODE_GROUP_PromotionListV30DataListPromotionRelatedProductImageMaterialListImageMode,
        self::CREATIVE_IMAGE_MODE_LARGE_PromotionListV30DataListPromotionRelatedProductImageMaterialListImageMode,
        self::CREATIVE_IMAGE_MODE_LARGE_VERTICAL_PromotionListV30DataListPromotionRelatedProductImageMaterialListImageMode,
        self::CREATIVE_IMAGE_MODE_PLAYABLE_HORIZONTAL_PromotionListV30DataListPromotionRelatedProductImageMaterialListImageMode,
        self::CREATIVE_IMAGE_MODE_PLAYABLE_VERTICAL_PromotionListV30DataListPromotionRelatedProductImageMaterialListImageMode,
        self::CREATIVE_IMAGE_MODE_SMALL_PromotionListV30DataListPromotionRelatedProductImageMaterialListImageMode,
        self::CREATIVE_IMAGE_MODE_UNION_SPLASH_PromotionListV30DataListPromotionRelatedProductImageMaterialListImageMode,
        self::CREATIVE_IMAGE_MODE_UNION_SPLASH_VIDEO_PromotionListV30DataListPromotionRelatedProductImageMaterialListImageMode,
        self::CREATIVE_IMAGE_MODE_VIDEO_PromotionListV30DataListPromotionRelatedProductImageMaterialListImageMode,
        self::CREATIVE_IMAGE_MODE_VIDEO_VERTICAL_PromotionListV30DataListPromotionRelatedProductImageMaterialListImageMode,
        self::SEARCH_AD_SMALL_IMAGE_PromotionListV30DataListPromotionRelatedProductImageMaterialListImageMode,
        self::TOUTIAO_SEARCH_AD_IMAGE_PromotionListV30DataListPromotionRelatedProductImageMaterialListImageMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionListV30DataListPromotionRelatedProductImageMaterialListImageMode', $value));
        }
        return (string) $value;
    }
}
