<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DpaVideoGetV2DataListVideoInfoImageMode
{
    public const CREATIVE_IMAGE_MODE_LARGE_DpaVideoGetV2DataListVideoInfoImageMode = 'CREATIVE_IMAGE_MODE_LARGE';
    public const CREATIVE_IMAGE_MODE_AWEME_LIVE_DpaVideoGetV2DataListVideoInfoImageMode = 'CREATIVE_IMAGE_MODE_AWEME_LIVE';
    public const SEARCH_AD_SMALL_IMAGE_DpaVideoGetV2DataListVideoInfoImageMode = 'SEARCH_AD_SMALL_IMAGE';
    public const CREATIVE_IMAGE_MODE_GIF_DpaVideoGetV2DataListVideoInfoImageMode = 'CREATIVE_IMAGE_MODE_GIF';
    public const CREATIVE_IMAGE_MODE_VIDEO_DpaVideoGetV2DataListVideoInfoImageMode = 'CREATIVE_IMAGE_MODE_VIDEO';
    public const TOUTIAO_SEARCH_AD_IMAGE_DpaVideoGetV2DataListVideoInfoImageMode = 'TOUTIAO_SEARCH_AD_IMAGE';
    public const CREATIVE_IMAGE_MODE_VIDEO_VERTICAL_DpaVideoGetV2DataListVideoInfoImageMode = 'CREATIVE_IMAGE_MODE_VIDEO_VERTICAL';
    public const CREATIVE_IMAGE_MODE_UNION_SPLASH_VIDEO_DpaVideoGetV2DataListVideoInfoImageMode = 'CREATIVE_IMAGE_MODE_UNION_SPLASH_VIDEO';
    public const CREATIVE_IMAGE_MODE_SMALL_DpaVideoGetV2DataListVideoInfoImageMode = 'CREATIVE_IMAGE_MODE_SMALL';
    public const CREATIVE_IMAGE_MODE_DISPLAY_WINDOW_DpaVideoGetV2DataListVideoInfoImageMode = 'CREATIVE_IMAGE_MODE_DISPLAY_WINDOW';
    public const CREATIVE_IMAGE_MODE_PLAYABLE_HORIZONTAL_DpaVideoGetV2DataListVideoInfoImageMode = 'CREATIVE_IMAGE_MODE_PLAYABLE_HORIZONTAL';
    public const CREATIVE_IMAGE_MODE_DIRECT_PLAYABLE_DpaVideoGetV2DataListVideoInfoImageMode = 'CREATIVE_IMAGE_MODE_DIRECT_PLAYABLE';
    public const CREATIVE_IMAGE_MODE_CALIBRATION_FREE_SINGLE_IMAGE_DpaVideoGetV2DataListVideoInfoImageMode = 'CREATIVE_IMAGE_MODE_CALIBRATION_FREE_SINGLE_IMAGE';
    public const CREATIVE_IMAGE_MODE_UNION_SPLASH_DpaVideoGetV2DataListVideoInfoImageMode = 'CREATIVE_IMAGE_MODE_UNION_SPLASH';
    public const CREATIVE_IMAGE_MODE_GROUP_DpaVideoGetV2DataListVideoInfoImageMode = 'CREATIVE_IMAGE_MODE_GROUP';
    public const CREATIVE_IMAGE_MODE_LARGE_VERTICAL_DpaVideoGetV2DataListVideoInfoImageMode = 'CREATIVE_IMAGE_MODE_LARGE_VERTICAL';
    public const CREATIVE_IMAGE_MODE_CALIBRATION_FREE_VIDEO_DpaVideoGetV2DataListVideoInfoImageMode = 'CREATIVE_IMAGE_MODE_CALIBRATION_FREE_VIDEO';
    public const CREATIVE_IMAGE_MODE_PLAYABLE_VERTICAL_DpaVideoGetV2DataListVideoInfoImageMode = 'CREATIVE_IMAGE_MODE_PLAYABLE_VERTICAL';
    public const CREATIVE_IMAGE_MODE_DECORATION_COUPON_DpaVideoGetV2DataListVideoInfoImageMode = 'CREATIVE_IMAGE_MODE_DECORATION_COUPON';

    public const ALLOWED_VALUES = [
        self::CREATIVE_IMAGE_MODE_LARGE_DpaVideoGetV2DataListVideoInfoImageMode,
        self::CREATIVE_IMAGE_MODE_AWEME_LIVE_DpaVideoGetV2DataListVideoInfoImageMode,
        self::SEARCH_AD_SMALL_IMAGE_DpaVideoGetV2DataListVideoInfoImageMode,
        self::CREATIVE_IMAGE_MODE_GIF_DpaVideoGetV2DataListVideoInfoImageMode,
        self::CREATIVE_IMAGE_MODE_VIDEO_DpaVideoGetV2DataListVideoInfoImageMode,
        self::TOUTIAO_SEARCH_AD_IMAGE_DpaVideoGetV2DataListVideoInfoImageMode,
        self::CREATIVE_IMAGE_MODE_VIDEO_VERTICAL_DpaVideoGetV2DataListVideoInfoImageMode,
        self::CREATIVE_IMAGE_MODE_UNION_SPLASH_VIDEO_DpaVideoGetV2DataListVideoInfoImageMode,
        self::CREATIVE_IMAGE_MODE_SMALL_DpaVideoGetV2DataListVideoInfoImageMode,
        self::CREATIVE_IMAGE_MODE_DISPLAY_WINDOW_DpaVideoGetV2DataListVideoInfoImageMode,
        self::CREATIVE_IMAGE_MODE_PLAYABLE_HORIZONTAL_DpaVideoGetV2DataListVideoInfoImageMode,
        self::CREATIVE_IMAGE_MODE_DIRECT_PLAYABLE_DpaVideoGetV2DataListVideoInfoImageMode,
        self::CREATIVE_IMAGE_MODE_CALIBRATION_FREE_SINGLE_IMAGE_DpaVideoGetV2DataListVideoInfoImageMode,
        self::CREATIVE_IMAGE_MODE_UNION_SPLASH_DpaVideoGetV2DataListVideoInfoImageMode,
        self::CREATIVE_IMAGE_MODE_GROUP_DpaVideoGetV2DataListVideoInfoImageMode,
        self::CREATIVE_IMAGE_MODE_LARGE_VERTICAL_DpaVideoGetV2DataListVideoInfoImageMode,
        self::CREATIVE_IMAGE_MODE_CALIBRATION_FREE_VIDEO_DpaVideoGetV2DataListVideoInfoImageMode,
        self::CREATIVE_IMAGE_MODE_PLAYABLE_VERTICAL_DpaVideoGetV2DataListVideoInfoImageMode,
        self::CREATIVE_IMAGE_MODE_DECORATION_COUPON_DpaVideoGetV2DataListVideoInfoImageMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DpaVideoGetV2DataListVideoInfoImageMode', $value));
        }
        return (string) $value;
    }
}
