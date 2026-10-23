<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionListV30DataListPromotionMaterialsImageMaterialListImageMode
{
    public const CREATIVE_IMAGE_MODE_AWEME_LIVE_PromotionListV30DataListPromotionMaterialsImageMaterialListImageMode = 'CREATIVE_IMAGE_MODE_AWEME_LIVE';
    public const CREATIVE_IMAGE_MODE_CALIBRATION_FREE_SINGLE_IMAGE_PromotionListV30DataListPromotionMaterialsImageMaterialListImageMode = 'CREATIVE_IMAGE_MODE_CALIBRATION_FREE_SINGLE_IMAGE';
    public const CREATIVE_IMAGE_MODE_CALIBRATION_FREE_VIDEO_PromotionListV30DataListPromotionMaterialsImageMaterialListImageMode = 'CREATIVE_IMAGE_MODE_CALIBRATION_FREE_VIDEO';
    public const CREATIVE_IMAGE_MODE_DISPLAY_WINDOW_PromotionListV30DataListPromotionMaterialsImageMaterialListImageMode = 'CREATIVE_IMAGE_MODE_DISPLAY_WINDOW';
    public const CREATIVE_IMAGE_MODE_GIF_PromotionListV30DataListPromotionMaterialsImageMaterialListImageMode = 'CREATIVE_IMAGE_MODE_GIF';
    public const CREATIVE_IMAGE_MODE_GROUP_PromotionListV30DataListPromotionMaterialsImageMaterialListImageMode = 'CREATIVE_IMAGE_MODE_GROUP';
    public const CREATIVE_IMAGE_MODE_LARGE_PromotionListV30DataListPromotionMaterialsImageMaterialListImageMode = 'CREATIVE_IMAGE_MODE_LARGE';
    public const CREATIVE_IMAGE_MODE_LARGE_VERTICAL_PromotionListV30DataListPromotionMaterialsImageMaterialListImageMode = 'CREATIVE_IMAGE_MODE_LARGE_VERTICAL';
    public const CREATIVE_IMAGE_MODE_PLAYABLE_HORIZONTAL_PromotionListV30DataListPromotionMaterialsImageMaterialListImageMode = 'CREATIVE_IMAGE_MODE_PLAYABLE_HORIZONTAL';
    public const CREATIVE_IMAGE_MODE_PLAYABLE_VERTICAL_PromotionListV30DataListPromotionMaterialsImageMaterialListImageMode = 'CREATIVE_IMAGE_MODE_PLAYABLE_VERTICAL';
    public const CREATIVE_IMAGE_MODE_SMALL_PromotionListV30DataListPromotionMaterialsImageMaterialListImageMode = 'CREATIVE_IMAGE_MODE_SMALL';
    public const CREATIVE_IMAGE_MODE_UNION_SPLASH_PromotionListV30DataListPromotionMaterialsImageMaterialListImageMode = 'CREATIVE_IMAGE_MODE_UNION_SPLASH';
    public const CREATIVE_IMAGE_MODE_UNION_SPLASH_VIDEO_PromotionListV30DataListPromotionMaterialsImageMaterialListImageMode = 'CREATIVE_IMAGE_MODE_UNION_SPLASH_VIDEO';
    public const CREATIVE_IMAGE_MODE_VIDEO_PromotionListV30DataListPromotionMaterialsImageMaterialListImageMode = 'CREATIVE_IMAGE_MODE_VIDEO';
    public const CREATIVE_IMAGE_MODE_VIDEO_VERTICAL_PromotionListV30DataListPromotionMaterialsImageMaterialListImageMode = 'CREATIVE_IMAGE_MODE_VIDEO_VERTICAL';
    public const SEARCH_AD_SMALL_IMAGE_PromotionListV30DataListPromotionMaterialsImageMaterialListImageMode = 'SEARCH_AD_SMALL_IMAGE';
    public const TOUTIAO_SEARCH_AD_IMAGE_PromotionListV30DataListPromotionMaterialsImageMaterialListImageMode = 'TOUTIAO_SEARCH_AD_IMAGE';

    public const ALLOWED_VALUES = [
        self::CREATIVE_IMAGE_MODE_AWEME_LIVE_PromotionListV30DataListPromotionMaterialsImageMaterialListImageMode,
        self::CREATIVE_IMAGE_MODE_CALIBRATION_FREE_SINGLE_IMAGE_PromotionListV30DataListPromotionMaterialsImageMaterialListImageMode,
        self::CREATIVE_IMAGE_MODE_CALIBRATION_FREE_VIDEO_PromotionListV30DataListPromotionMaterialsImageMaterialListImageMode,
        self::CREATIVE_IMAGE_MODE_DISPLAY_WINDOW_PromotionListV30DataListPromotionMaterialsImageMaterialListImageMode,
        self::CREATIVE_IMAGE_MODE_GIF_PromotionListV30DataListPromotionMaterialsImageMaterialListImageMode,
        self::CREATIVE_IMAGE_MODE_GROUP_PromotionListV30DataListPromotionMaterialsImageMaterialListImageMode,
        self::CREATIVE_IMAGE_MODE_LARGE_PromotionListV30DataListPromotionMaterialsImageMaterialListImageMode,
        self::CREATIVE_IMAGE_MODE_LARGE_VERTICAL_PromotionListV30DataListPromotionMaterialsImageMaterialListImageMode,
        self::CREATIVE_IMAGE_MODE_PLAYABLE_HORIZONTAL_PromotionListV30DataListPromotionMaterialsImageMaterialListImageMode,
        self::CREATIVE_IMAGE_MODE_PLAYABLE_VERTICAL_PromotionListV30DataListPromotionMaterialsImageMaterialListImageMode,
        self::CREATIVE_IMAGE_MODE_SMALL_PromotionListV30DataListPromotionMaterialsImageMaterialListImageMode,
        self::CREATIVE_IMAGE_MODE_UNION_SPLASH_PromotionListV30DataListPromotionMaterialsImageMaterialListImageMode,
        self::CREATIVE_IMAGE_MODE_UNION_SPLASH_VIDEO_PromotionListV30DataListPromotionMaterialsImageMaterialListImageMode,
        self::CREATIVE_IMAGE_MODE_VIDEO_PromotionListV30DataListPromotionMaterialsImageMaterialListImageMode,
        self::CREATIVE_IMAGE_MODE_VIDEO_VERTICAL_PromotionListV30DataListPromotionMaterialsImageMaterialListImageMode,
        self::SEARCH_AD_SMALL_IMAGE_PromotionListV30DataListPromotionMaterialsImageMaterialListImageMode,
        self::TOUTIAO_SEARCH_AD_IMAGE_PromotionListV30DataListPromotionMaterialsImageMaterialListImageMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionListV30DataListPromotionMaterialsImageMaterialListImageMode', $value));
        }
        return (string) $value;
    }
}
