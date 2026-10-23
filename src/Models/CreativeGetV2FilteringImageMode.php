<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CreativeGetV2FilteringImageMode
{
    public const CREATIVE_IMAGE_MODE_AWEME_LIVE_CreativeGetV2FilteringImageMode = 'CREATIVE_IMAGE_MODE_AWEME_LIVE';
    public const CREATIVE_IMAGE_MODE_CALIBRATION_FREE_SINGLE_IMAGE_CreativeGetV2FilteringImageMode = 'CREATIVE_IMAGE_MODE_CALIBRATION_FREE_SINGLE_IMAGE';
    public const CREATIVE_IMAGE_MODE_CALIBRATION_FREE_VIDEO_CreativeGetV2FilteringImageMode = 'CREATIVE_IMAGE_MODE_CALIBRATION_FREE_VIDEO';
    public const CREATIVE_IMAGE_MODE_DECORATION_COUPON_CreativeGetV2FilteringImageMode = 'CREATIVE_IMAGE_MODE_DECORATION_COUPON';
    public const CREATIVE_IMAGE_MODE_DIRECT_PLAYABLE_CreativeGetV2FilteringImageMode = 'CREATIVE_IMAGE_MODE_DIRECT_PLAYABLE';
    public const CREATIVE_IMAGE_MODE_DISPLAY_WINDOW_CreativeGetV2FilteringImageMode = 'CREATIVE_IMAGE_MODE_DISPLAY_WINDOW';
    public const CREATIVE_IMAGE_MODE_GIF_CreativeGetV2FilteringImageMode = 'CREATIVE_IMAGE_MODE_GIF';
    public const CREATIVE_IMAGE_MODE_GROUP_CreativeGetV2FilteringImageMode = 'CREATIVE_IMAGE_MODE_GROUP';
    public const CREATIVE_IMAGE_MODE_LARGE_CreativeGetV2FilteringImageMode = 'CREATIVE_IMAGE_MODE_LARGE';
    public const CREATIVE_IMAGE_MODE_LARGE_VERTICAL_CreativeGetV2FilteringImageMode = 'CREATIVE_IMAGE_MODE_LARGE_VERTICAL';
    public const CREATIVE_IMAGE_MODE_PLAYABLE_HORIZONTAL_CreativeGetV2FilteringImageMode = 'CREATIVE_IMAGE_MODE_PLAYABLE_HORIZONTAL';
    public const CREATIVE_IMAGE_MODE_PLAYABLE_VERTICAL_CreativeGetV2FilteringImageMode = 'CREATIVE_IMAGE_MODE_PLAYABLE_VERTICAL';
    public const CREATIVE_IMAGE_MODE_SMALL_CreativeGetV2FilteringImageMode = 'CREATIVE_IMAGE_MODE_SMALL';
    public const CREATIVE_IMAGE_MODE_UNION_SPLASH_CreativeGetV2FilteringImageMode = 'CREATIVE_IMAGE_MODE_UNION_SPLASH';
    public const CREATIVE_IMAGE_MODE_UNION_SPLASH_VIDEO_CreativeGetV2FilteringImageMode = 'CREATIVE_IMAGE_MODE_UNION_SPLASH_VIDEO';
    public const CREATIVE_IMAGE_MODE_VIDEO_CreativeGetV2FilteringImageMode = 'CREATIVE_IMAGE_MODE_VIDEO';
    public const CREATIVE_IMAGE_MODE_VIDEO_VERTICAL_CreativeGetV2FilteringImageMode = 'CREATIVE_IMAGE_MODE_VIDEO_VERTICAL';
    public const INVALID_DATA_CreativeGetV2FilteringImageMode = 'INVALID_DATA';
    public const SEARCH_AD_SMALL_IMAGE_CreativeGetV2FilteringImageMode = 'SEARCH_AD_SMALL_IMAGE';
    public const TOUTIAO_SEARCH_AD_IMAGE_CreativeGetV2FilteringImageMode = 'TOUTIAO_SEARCH_AD_IMAGE';

    public const ALLOWED_VALUES = [
        self::CREATIVE_IMAGE_MODE_AWEME_LIVE_CreativeGetV2FilteringImageMode,
        self::CREATIVE_IMAGE_MODE_CALIBRATION_FREE_SINGLE_IMAGE_CreativeGetV2FilteringImageMode,
        self::CREATIVE_IMAGE_MODE_CALIBRATION_FREE_VIDEO_CreativeGetV2FilteringImageMode,
        self::CREATIVE_IMAGE_MODE_DECORATION_COUPON_CreativeGetV2FilteringImageMode,
        self::CREATIVE_IMAGE_MODE_DIRECT_PLAYABLE_CreativeGetV2FilteringImageMode,
        self::CREATIVE_IMAGE_MODE_DISPLAY_WINDOW_CreativeGetV2FilteringImageMode,
        self::CREATIVE_IMAGE_MODE_GIF_CreativeGetV2FilteringImageMode,
        self::CREATIVE_IMAGE_MODE_GROUP_CreativeGetV2FilteringImageMode,
        self::CREATIVE_IMAGE_MODE_LARGE_CreativeGetV2FilteringImageMode,
        self::CREATIVE_IMAGE_MODE_LARGE_VERTICAL_CreativeGetV2FilteringImageMode,
        self::CREATIVE_IMAGE_MODE_PLAYABLE_HORIZONTAL_CreativeGetV2FilteringImageMode,
        self::CREATIVE_IMAGE_MODE_PLAYABLE_VERTICAL_CreativeGetV2FilteringImageMode,
        self::CREATIVE_IMAGE_MODE_SMALL_CreativeGetV2FilteringImageMode,
        self::CREATIVE_IMAGE_MODE_UNION_SPLASH_CreativeGetV2FilteringImageMode,
        self::CREATIVE_IMAGE_MODE_UNION_SPLASH_VIDEO_CreativeGetV2FilteringImageMode,
        self::CREATIVE_IMAGE_MODE_VIDEO_CreativeGetV2FilteringImageMode,
        self::CREATIVE_IMAGE_MODE_VIDEO_VERTICAL_CreativeGetV2FilteringImageMode,
        self::INVALID_DATA_CreativeGetV2FilteringImageMode,
        self::SEARCH_AD_SMALL_IMAGE_CreativeGetV2FilteringImageMode,
        self::TOUTIAO_SEARCH_AD_IMAGE_CreativeGetV2FilteringImageMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CreativeGetV2FilteringImageMode', $value));
        }
        return (string) $value;
    }
}
