<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DpaTemplateGetV2DataListTemplateMode
{
    public const CREATIVE_IMAGE_MODE_SMALL_DpaTemplateGetV2DataListTemplateMode = 'CREATIVE_IMAGE_MODE_SMALL';
    public const CREATIVE_IMAGE_MODE_LARGE_DpaTemplateGetV2DataListTemplateMode = 'CREATIVE_IMAGE_MODE_LARGE';
    public const CREATIVE_IMAGE_MODE_GROUP_DpaTemplateGetV2DataListTemplateMode = 'CREATIVE_IMAGE_MODE_GROUP';
    public const CREATIVE_IMAGE_MODE_VIDEO_DpaTemplateGetV2DataListTemplateMode = 'CREATIVE_IMAGE_MODE_VIDEO';
    public const CREATIVE_IMAGE_MODE_GIF_DpaTemplateGetV2DataListTemplateMode = 'CREATIVE_IMAGE_MODE_GIF';
    public const CREATIVE_IMAGE_MODE_LARGE_VERTICAL_DpaTemplateGetV2DataListTemplateMode = 'CREATIVE_IMAGE_MODE_LARGE_VERTICAL';
    public const CREATIVE_IMAGE_MODE_VIDEO_VERTICAL_DpaTemplateGetV2DataListTemplateMode = 'CREATIVE_IMAGE_MODE_VIDEO_VERTICAL';
    public const TOUTIAO_SEARCH_AD_IMAGE_DpaTemplateGetV2DataListTemplateMode = 'TOUTIAO_SEARCH_AD_IMAGE';
    public const SEARCH_AD_SMALL_IMAGE_DpaTemplateGetV2DataListTemplateMode = 'SEARCH_AD_SMALL_IMAGE';
    public const CREATIVE_IMAGE_MODE_UNION_SPLASH_DpaTemplateGetV2DataListTemplateMode = 'CREATIVE_IMAGE_MODE_UNION_SPLASH';
    public const CREATIVE_IMAGE_MODE_UNION_SPLASH_VIDEO_DpaTemplateGetV2DataListTemplateMode = 'CREATIVE_IMAGE_MODE_UNION_SPLASH_VIDEO';
    public const CREATIVE_IMAGE_MODE_AWEME_LIVE_DpaTemplateGetV2DataListTemplateMode = 'CREATIVE_IMAGE_MODE_AWEME_LIVE';
    public const CREATIVE_IMAGE_MODE_DISPLAY_WINDOW_DpaTemplateGetV2DataListTemplateMode = 'CREATIVE_IMAGE_MODE_DISPLAY_WINDOW';
    public const CREATIVE_IMAGE_MODE_PLAYABLE_HORIZONTAL_DpaTemplateGetV2DataListTemplateMode = 'CREATIVE_IMAGE_MODE_PLAYABLE_HORIZONTAL';
    public const CREATIVE_IMAGE_MODE_PLAYABLE_VERTICAL_DpaTemplateGetV2DataListTemplateMode = 'CREATIVE_IMAGE_MODE_PLAYABLE_VERTICAL';
    public const ALL_DpaTemplateGetV2DataListTemplateMode = 'ALL';
    public const NOT_ALL_DpaTemplateGetV2DataListTemplateMode = 'NOT_ALL';

    public const ALLOWED_VALUES = [
        self::CREATIVE_IMAGE_MODE_SMALL_DpaTemplateGetV2DataListTemplateMode,
        self::CREATIVE_IMAGE_MODE_LARGE_DpaTemplateGetV2DataListTemplateMode,
        self::CREATIVE_IMAGE_MODE_GROUP_DpaTemplateGetV2DataListTemplateMode,
        self::CREATIVE_IMAGE_MODE_VIDEO_DpaTemplateGetV2DataListTemplateMode,
        self::CREATIVE_IMAGE_MODE_GIF_DpaTemplateGetV2DataListTemplateMode,
        self::CREATIVE_IMAGE_MODE_LARGE_VERTICAL_DpaTemplateGetV2DataListTemplateMode,
        self::CREATIVE_IMAGE_MODE_VIDEO_VERTICAL_DpaTemplateGetV2DataListTemplateMode,
        self::TOUTIAO_SEARCH_AD_IMAGE_DpaTemplateGetV2DataListTemplateMode,
        self::SEARCH_AD_SMALL_IMAGE_DpaTemplateGetV2DataListTemplateMode,
        self::CREATIVE_IMAGE_MODE_UNION_SPLASH_DpaTemplateGetV2DataListTemplateMode,
        self::CREATIVE_IMAGE_MODE_UNION_SPLASH_VIDEO_DpaTemplateGetV2DataListTemplateMode,
        self::CREATIVE_IMAGE_MODE_AWEME_LIVE_DpaTemplateGetV2DataListTemplateMode,
        self::CREATIVE_IMAGE_MODE_DISPLAY_WINDOW_DpaTemplateGetV2DataListTemplateMode,
        self::CREATIVE_IMAGE_MODE_PLAYABLE_HORIZONTAL_DpaTemplateGetV2DataListTemplateMode,
        self::CREATIVE_IMAGE_MODE_PLAYABLE_VERTICAL_DpaTemplateGetV2DataListTemplateMode,
        self::ALL_DpaTemplateGetV2DataListTemplateMode,
        self::NOT_ALL_DpaTemplateGetV2DataListTemplateMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DpaTemplateGetV2DataListTemplateMode', $value));
        }
        return (string) $value;
    }
}
