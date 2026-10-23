<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CreativeDetailGetV30DataCreativeImageMaterialsImageMode
{
    public const CREATIVE_IMAGE_MODE_AWEME_LIVE_CreativeDetailGetV30DataCreativeImageMaterialsImageMode = 'CREATIVE_IMAGE_MODE_AWEME_LIVE';
    public const CREATIVE_IMAGE_MODE_CALIBRATION_FREE_SINGLE_IMAGE_CreativeDetailGetV30DataCreativeImageMaterialsImageMode = 'CREATIVE_IMAGE_MODE_CALIBRATION_FREE_SINGLE_IMAGE';
    public const CREATIVE_IMAGE_MODE_CALIBRATION_FREE_VIDEO_CreativeDetailGetV30DataCreativeImageMaterialsImageMode = 'CREATIVE_IMAGE_MODE_CALIBRATION_FREE_VIDEO';
    public const CREATIVE_IMAGE_MODE_DIRECT_PLAYABLE_CreativeDetailGetV30DataCreativeImageMaterialsImageMode = 'CREATIVE_IMAGE_MODE_DIRECT_PLAYABLE';
    public const CREATIVE_IMAGE_MODE_DISPLAY_WINDOW_CreativeDetailGetV30DataCreativeImageMaterialsImageMode = 'CREATIVE_IMAGE_MODE_DISPLAY_WINDOW';
    public const CREATIVE_IMAGE_MODE_GIF_CreativeDetailGetV30DataCreativeImageMaterialsImageMode = 'CREATIVE_IMAGE_MODE_GIF';
    public const CREATIVE_IMAGE_MODE_GROUP_CreativeDetailGetV30DataCreativeImageMaterialsImageMode = 'CREATIVE_IMAGE_MODE_GROUP';
    public const CREATIVE_IMAGE_MODE_LARGE_CreativeDetailGetV30DataCreativeImageMaterialsImageMode = 'CREATIVE_IMAGE_MODE_LARGE';
    public const CREATIVE_IMAGE_MODE_LARGE_VERTICAL_CreativeDetailGetV30DataCreativeImageMaterialsImageMode = 'CREATIVE_IMAGE_MODE_LARGE_VERTICAL';
    public const CREATIVE_IMAGE_MODE_PLAYABLE_HORIZONTAL_CreativeDetailGetV30DataCreativeImageMaterialsImageMode = 'CREATIVE_IMAGE_MODE_PLAYABLE_HORIZONTAL';
    public const CREATIVE_IMAGE_MODE_PLAYABLE_VERTICAL_CreativeDetailGetV30DataCreativeImageMaterialsImageMode = 'CREATIVE_IMAGE_MODE_PLAYABLE_VERTICAL';
    public const CREATIVE_IMAGE_MODE_SMALL_CreativeDetailGetV30DataCreativeImageMaterialsImageMode = 'CREATIVE_IMAGE_MODE_SMALL';
    public const CREATIVE_IMAGE_MODE_UNION_SPLASH_CreativeDetailGetV30DataCreativeImageMaterialsImageMode = 'CREATIVE_IMAGE_MODE_UNION_SPLASH';
    public const CREATIVE_IMAGE_MODE_UNION_SPLASH_VIDEO_CreativeDetailGetV30DataCreativeImageMaterialsImageMode = 'CREATIVE_IMAGE_MODE_UNION_SPLASH_VIDEO';
    public const CREATIVE_IMAGE_MODE_VIDEO_CreativeDetailGetV30DataCreativeImageMaterialsImageMode = 'CREATIVE_IMAGE_MODE_VIDEO';
    public const CREATIVE_IMAGE_MODE_VIDEO_VERTICAL_CreativeDetailGetV30DataCreativeImageMaterialsImageMode = 'CREATIVE_IMAGE_MODE_VIDEO_VERTICAL';
    public const SEARCH_AD_SMALL_IMAGE_CreativeDetailGetV30DataCreativeImageMaterialsImageMode = 'SEARCH_AD_SMALL_IMAGE';
    public const TOUTIAO_SEARCH_AD_IMAGE_CreativeDetailGetV30DataCreativeImageMaterialsImageMode = 'TOUTIAO_SEARCH_AD_IMAGE';

    public const ALLOWED_VALUES = [
        self::CREATIVE_IMAGE_MODE_AWEME_LIVE_CreativeDetailGetV30DataCreativeImageMaterialsImageMode,
        self::CREATIVE_IMAGE_MODE_CALIBRATION_FREE_SINGLE_IMAGE_CreativeDetailGetV30DataCreativeImageMaterialsImageMode,
        self::CREATIVE_IMAGE_MODE_CALIBRATION_FREE_VIDEO_CreativeDetailGetV30DataCreativeImageMaterialsImageMode,
        self::CREATIVE_IMAGE_MODE_DIRECT_PLAYABLE_CreativeDetailGetV30DataCreativeImageMaterialsImageMode,
        self::CREATIVE_IMAGE_MODE_DISPLAY_WINDOW_CreativeDetailGetV30DataCreativeImageMaterialsImageMode,
        self::CREATIVE_IMAGE_MODE_GIF_CreativeDetailGetV30DataCreativeImageMaterialsImageMode,
        self::CREATIVE_IMAGE_MODE_GROUP_CreativeDetailGetV30DataCreativeImageMaterialsImageMode,
        self::CREATIVE_IMAGE_MODE_LARGE_CreativeDetailGetV30DataCreativeImageMaterialsImageMode,
        self::CREATIVE_IMAGE_MODE_LARGE_VERTICAL_CreativeDetailGetV30DataCreativeImageMaterialsImageMode,
        self::CREATIVE_IMAGE_MODE_PLAYABLE_HORIZONTAL_CreativeDetailGetV30DataCreativeImageMaterialsImageMode,
        self::CREATIVE_IMAGE_MODE_PLAYABLE_VERTICAL_CreativeDetailGetV30DataCreativeImageMaterialsImageMode,
        self::CREATIVE_IMAGE_MODE_SMALL_CreativeDetailGetV30DataCreativeImageMaterialsImageMode,
        self::CREATIVE_IMAGE_MODE_UNION_SPLASH_CreativeDetailGetV30DataCreativeImageMaterialsImageMode,
        self::CREATIVE_IMAGE_MODE_UNION_SPLASH_VIDEO_CreativeDetailGetV30DataCreativeImageMaterialsImageMode,
        self::CREATIVE_IMAGE_MODE_VIDEO_CreativeDetailGetV30DataCreativeImageMaterialsImageMode,
        self::CREATIVE_IMAGE_MODE_VIDEO_VERTICAL_CreativeDetailGetV30DataCreativeImageMaterialsImageMode,
        self::SEARCH_AD_SMALL_IMAGE_CreativeDetailGetV30DataCreativeImageMaterialsImageMode,
        self::TOUTIAO_SEARCH_AD_IMAGE_CreativeDetailGetV30DataCreativeImageMaterialsImageMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CreativeDetailGetV30DataCreativeImageMaterialsImageMode', $value));
        }
        return (string) $value;
    }
}
