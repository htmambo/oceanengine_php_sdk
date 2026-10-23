<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CreativeCustomCreativeCreateV2CreativeListDecorationMaterialImageMode
{
    public const CREATIVE_IMAGE_MODE_LARGE_CreativeCustomCreativeCreateV2CreativeListDecorationMaterialImageMode = 'CREATIVE_IMAGE_MODE_LARGE';
    public const CREATIVE_IMAGE_MODE_AWEME_LIVE_CreativeCustomCreativeCreateV2CreativeListDecorationMaterialImageMode = 'CREATIVE_IMAGE_MODE_AWEME_LIVE';
    public const SEARCH_AD_SMALL_IMAGE_CreativeCustomCreativeCreateV2CreativeListDecorationMaterialImageMode = 'SEARCH_AD_SMALL_IMAGE';
    public const CREATIVE_IMAGE_MODE_GIF_CreativeCustomCreativeCreateV2CreativeListDecorationMaterialImageMode = 'CREATIVE_IMAGE_MODE_GIF';
    public const CREATIVE_IMAGE_MODE_VIDEO_CreativeCustomCreativeCreateV2CreativeListDecorationMaterialImageMode = 'CREATIVE_IMAGE_MODE_VIDEO';
    public const TOUTIAO_SEARCH_AD_IMAGE_CreativeCustomCreativeCreateV2CreativeListDecorationMaterialImageMode = 'TOUTIAO_SEARCH_AD_IMAGE';
    public const CREATIVE_IMAGE_MODE_VIDEO_VERTICAL_CreativeCustomCreativeCreateV2CreativeListDecorationMaterialImageMode = 'CREATIVE_IMAGE_MODE_VIDEO_VERTICAL';
    public const CREATIVE_IMAGE_MODE_UNION_SPLASH_VIDEO_CreativeCustomCreativeCreateV2CreativeListDecorationMaterialImageMode = 'CREATIVE_IMAGE_MODE_UNION_SPLASH_VIDEO';
    public const CREATIVE_IMAGE_MODE_SMALL_CreativeCustomCreativeCreateV2CreativeListDecorationMaterialImageMode = 'CREATIVE_IMAGE_MODE_SMALL';
    public const CREATIVE_IMAGE_MODE_DISPLAY_WINDOW_CreativeCustomCreativeCreateV2CreativeListDecorationMaterialImageMode = 'CREATIVE_IMAGE_MODE_DISPLAY_WINDOW';
    public const CREATIVE_IMAGE_MODE_PLAYABLE_HORIZONTAL_CreativeCustomCreativeCreateV2CreativeListDecorationMaterialImageMode = 'CREATIVE_IMAGE_MODE_PLAYABLE_HORIZONTAL';
    public const CREATIVE_IMAGE_MODE_DIRECT_PLAYABLE_CreativeCustomCreativeCreateV2CreativeListDecorationMaterialImageMode = 'CREATIVE_IMAGE_MODE_DIRECT_PLAYABLE';
    public const CREATIVE_IMAGE_MODE_CALIBRATION_FREE_SINGLE_IMAGE_CreativeCustomCreativeCreateV2CreativeListDecorationMaterialImageMode = 'CREATIVE_IMAGE_MODE_CALIBRATION_FREE_SINGLE_IMAGE';
    public const CREATIVE_IMAGE_MODE_UNION_SPLASH_CreativeCustomCreativeCreateV2CreativeListDecorationMaterialImageMode = 'CREATIVE_IMAGE_MODE_UNION_SPLASH';
    public const CREATIVE_IMAGE_MODE_GROUP_CreativeCustomCreativeCreateV2CreativeListDecorationMaterialImageMode = 'CREATIVE_IMAGE_MODE_GROUP';
    public const CREATIVE_IMAGE_MODE_LARGE_VERTICAL_CreativeCustomCreativeCreateV2CreativeListDecorationMaterialImageMode = 'CREATIVE_IMAGE_MODE_LARGE_VERTICAL';
    public const CREATIVE_IMAGE_MODE_CALIBRATION_FREE_VIDEO_CreativeCustomCreativeCreateV2CreativeListDecorationMaterialImageMode = 'CREATIVE_IMAGE_MODE_CALIBRATION_FREE_VIDEO';
    public const CREATIVE_IMAGE_MODE_PLAYABLE_VERTICAL_CreativeCustomCreativeCreateV2CreativeListDecorationMaterialImageMode = 'CREATIVE_IMAGE_MODE_PLAYABLE_VERTICAL';
    public const CREATIVE_IMAGE_MODE_DECORATION_COUPON_CreativeCustomCreativeCreateV2CreativeListDecorationMaterialImageMode = 'CREATIVE_IMAGE_MODE_DECORATION_COUPON';

    public const ALLOWED_VALUES = [
        self::CREATIVE_IMAGE_MODE_LARGE_CreativeCustomCreativeCreateV2CreativeListDecorationMaterialImageMode,
        self::CREATIVE_IMAGE_MODE_AWEME_LIVE_CreativeCustomCreativeCreateV2CreativeListDecorationMaterialImageMode,
        self::SEARCH_AD_SMALL_IMAGE_CreativeCustomCreativeCreateV2CreativeListDecorationMaterialImageMode,
        self::CREATIVE_IMAGE_MODE_GIF_CreativeCustomCreativeCreateV2CreativeListDecorationMaterialImageMode,
        self::CREATIVE_IMAGE_MODE_VIDEO_CreativeCustomCreativeCreateV2CreativeListDecorationMaterialImageMode,
        self::TOUTIAO_SEARCH_AD_IMAGE_CreativeCustomCreativeCreateV2CreativeListDecorationMaterialImageMode,
        self::CREATIVE_IMAGE_MODE_VIDEO_VERTICAL_CreativeCustomCreativeCreateV2CreativeListDecorationMaterialImageMode,
        self::CREATIVE_IMAGE_MODE_UNION_SPLASH_VIDEO_CreativeCustomCreativeCreateV2CreativeListDecorationMaterialImageMode,
        self::CREATIVE_IMAGE_MODE_SMALL_CreativeCustomCreativeCreateV2CreativeListDecorationMaterialImageMode,
        self::CREATIVE_IMAGE_MODE_DISPLAY_WINDOW_CreativeCustomCreativeCreateV2CreativeListDecorationMaterialImageMode,
        self::CREATIVE_IMAGE_MODE_PLAYABLE_HORIZONTAL_CreativeCustomCreativeCreateV2CreativeListDecorationMaterialImageMode,
        self::CREATIVE_IMAGE_MODE_DIRECT_PLAYABLE_CreativeCustomCreativeCreateV2CreativeListDecorationMaterialImageMode,
        self::CREATIVE_IMAGE_MODE_CALIBRATION_FREE_SINGLE_IMAGE_CreativeCustomCreativeCreateV2CreativeListDecorationMaterialImageMode,
        self::CREATIVE_IMAGE_MODE_UNION_SPLASH_CreativeCustomCreativeCreateV2CreativeListDecorationMaterialImageMode,
        self::CREATIVE_IMAGE_MODE_GROUP_CreativeCustomCreativeCreateV2CreativeListDecorationMaterialImageMode,
        self::CREATIVE_IMAGE_MODE_LARGE_VERTICAL_CreativeCustomCreativeCreateV2CreativeListDecorationMaterialImageMode,
        self::CREATIVE_IMAGE_MODE_CALIBRATION_FREE_VIDEO_CreativeCustomCreativeCreateV2CreativeListDecorationMaterialImageMode,
        self::CREATIVE_IMAGE_MODE_PLAYABLE_VERTICAL_CreativeCustomCreativeCreateV2CreativeListDecorationMaterialImageMode,
        self::CREATIVE_IMAGE_MODE_DECORATION_COUPON_CreativeCustomCreativeCreateV2CreativeListDecorationMaterialImageMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CreativeCustomCreativeCreateV2CreativeListDecorationMaterialImageMode', $value));
        }
        return (string) $value;
    }
}
