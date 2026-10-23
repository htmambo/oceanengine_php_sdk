<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class RecommendVideoListV30DataRecommendVideoListImageMode
{
    public const AWEME_PHOTO_RecommendVideoListV30DataRecommendVideoListImageMode = 'AWEME_PHOTO';
    public const CREATIVE_IMAGE_MODE_AWEME_LIVE_RecommendVideoListV30DataRecommendVideoListImageMode = 'CREATIVE_IMAGE_MODE_AWEME_LIVE';
    public const CREATIVE_IMAGE_MODE_CALIBRATION_FREE_SINGLE_IMAGE_RecommendVideoListV30DataRecommendVideoListImageMode = 'CREATIVE_IMAGE_MODE_CALIBRATION_FREE_SINGLE_IMAGE';
    public const CREATIVE_IMAGE_MODE_CALIBRATION_FREE_VIDEO_RecommendVideoListV30DataRecommendVideoListImageMode = 'CREATIVE_IMAGE_MODE_CALIBRATION_FREE_VIDEO';
    public const CREATIVE_IMAGE_MODE_DISPLAY_WINDOW_RecommendVideoListV30DataRecommendVideoListImageMode = 'CREATIVE_IMAGE_MODE_DISPLAY_WINDOW';
    public const CREATIVE_IMAGE_MODE_GIF_RecommendVideoListV30DataRecommendVideoListImageMode = 'CREATIVE_IMAGE_MODE_GIF';
    public const CREATIVE_IMAGE_MODE_GROUP_RecommendVideoListV30DataRecommendVideoListImageMode = 'CREATIVE_IMAGE_MODE_GROUP';
    public const CREATIVE_IMAGE_MODE_LARGE_RecommendVideoListV30DataRecommendVideoListImageMode = 'CREATIVE_IMAGE_MODE_LARGE';
    public const CREATIVE_IMAGE_MODE_LARGE_VERTICAL_RecommendVideoListV30DataRecommendVideoListImageMode = 'CREATIVE_IMAGE_MODE_LARGE_VERTICAL';
    public const CREATIVE_IMAGE_MODE_PLAYABLE_HORIZONTAL_RecommendVideoListV30DataRecommendVideoListImageMode = 'CREATIVE_IMAGE_MODE_PLAYABLE_HORIZONTAL';
    public const CREATIVE_IMAGE_MODE_PLAYABLE_VERTICAL_RecommendVideoListV30DataRecommendVideoListImageMode = 'CREATIVE_IMAGE_MODE_PLAYABLE_VERTICAL';
    public const CREATIVE_IMAGE_MODE_SMALL_RecommendVideoListV30DataRecommendVideoListImageMode = 'CREATIVE_IMAGE_MODE_SMALL';
    public const CREATIVE_IMAGE_MODE_UNION_SPLASH_RecommendVideoListV30DataRecommendVideoListImageMode = 'CREATIVE_IMAGE_MODE_UNION_SPLASH';
    public const CREATIVE_IMAGE_MODE_UNION_SPLASH_VIDEO_RecommendVideoListV30DataRecommendVideoListImageMode = 'CREATIVE_IMAGE_MODE_UNION_SPLASH_VIDEO';
    public const CREATIVE_IMAGE_MODE_VIDEO_RecommendVideoListV30DataRecommendVideoListImageMode = 'CREATIVE_IMAGE_MODE_VIDEO';
    public const CREATIVE_IMAGE_MODE_VIDEO_VERTICAL_RecommendVideoListV30DataRecommendVideoListImageMode = 'CREATIVE_IMAGE_MODE_VIDEO_VERTICAL';
    public const SEARCH_AD_SMALL_IMAGE_RecommendVideoListV30DataRecommendVideoListImageMode = 'SEARCH_AD_SMALL_IMAGE';
    public const TOUTIAO_SEARCH_AD_IMAGE_RecommendVideoListV30DataRecommendVideoListImageMode = 'TOUTIAO_SEARCH_AD_IMAGE';

    public const ALLOWED_VALUES = [
        self::AWEME_PHOTO_RecommendVideoListV30DataRecommendVideoListImageMode,
        self::CREATIVE_IMAGE_MODE_AWEME_LIVE_RecommendVideoListV30DataRecommendVideoListImageMode,
        self::CREATIVE_IMAGE_MODE_CALIBRATION_FREE_SINGLE_IMAGE_RecommendVideoListV30DataRecommendVideoListImageMode,
        self::CREATIVE_IMAGE_MODE_CALIBRATION_FREE_VIDEO_RecommendVideoListV30DataRecommendVideoListImageMode,
        self::CREATIVE_IMAGE_MODE_DISPLAY_WINDOW_RecommendVideoListV30DataRecommendVideoListImageMode,
        self::CREATIVE_IMAGE_MODE_GIF_RecommendVideoListV30DataRecommendVideoListImageMode,
        self::CREATIVE_IMAGE_MODE_GROUP_RecommendVideoListV30DataRecommendVideoListImageMode,
        self::CREATIVE_IMAGE_MODE_LARGE_RecommendVideoListV30DataRecommendVideoListImageMode,
        self::CREATIVE_IMAGE_MODE_LARGE_VERTICAL_RecommendVideoListV30DataRecommendVideoListImageMode,
        self::CREATIVE_IMAGE_MODE_PLAYABLE_HORIZONTAL_RecommendVideoListV30DataRecommendVideoListImageMode,
        self::CREATIVE_IMAGE_MODE_PLAYABLE_VERTICAL_RecommendVideoListV30DataRecommendVideoListImageMode,
        self::CREATIVE_IMAGE_MODE_SMALL_RecommendVideoListV30DataRecommendVideoListImageMode,
        self::CREATIVE_IMAGE_MODE_UNION_SPLASH_RecommendVideoListV30DataRecommendVideoListImageMode,
        self::CREATIVE_IMAGE_MODE_UNION_SPLASH_VIDEO_RecommendVideoListV30DataRecommendVideoListImageMode,
        self::CREATIVE_IMAGE_MODE_VIDEO_RecommendVideoListV30DataRecommendVideoListImageMode,
        self::CREATIVE_IMAGE_MODE_VIDEO_VERTICAL_RecommendVideoListV30DataRecommendVideoListImageMode,
        self::SEARCH_AD_SMALL_IMAGE_RecommendVideoListV30DataRecommendVideoListImageMode,
        self::TOUTIAO_SEARCH_AD_IMAGE_RecommendVideoListV30DataRecommendVideoListImageMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum RecommendVideoListV30DataRecommendVideoListImageMode', $value));
        }
        return (string) $value;
    }
}
