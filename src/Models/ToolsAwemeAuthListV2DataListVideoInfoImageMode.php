<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAwemeAuthListV2DataListVideoInfoImageMode
{
    public const AWEME_PHOTO_ToolsAwemeAuthListV2DataListVideoInfoImageMode = 'AWEME_PHOTO';
    public const CREATIVE_IMAGE_MODE_AWEME_LIVE_ToolsAwemeAuthListV2DataListVideoInfoImageMode = 'CREATIVE_IMAGE_MODE_AWEME_LIVE';
    public const CREATIVE_IMAGE_MODE_DISPLAY_WINDOW_ToolsAwemeAuthListV2DataListVideoInfoImageMode = 'CREATIVE_IMAGE_MODE_DISPLAY_WINDOW';
    public const CREATIVE_IMAGE_MODE_GIF_ToolsAwemeAuthListV2DataListVideoInfoImageMode = 'CREATIVE_IMAGE_MODE_GIF';
    public const CREATIVE_IMAGE_MODE_GROUP_ToolsAwemeAuthListV2DataListVideoInfoImageMode = 'CREATIVE_IMAGE_MODE_GROUP';
    public const CREATIVE_IMAGE_MODE_LARGE_ToolsAwemeAuthListV2DataListVideoInfoImageMode = 'CREATIVE_IMAGE_MODE_LARGE';
    public const CREATIVE_IMAGE_MODE_LARGE_VERTICAL_ToolsAwemeAuthListV2DataListVideoInfoImageMode = 'CREATIVE_IMAGE_MODE_LARGE_VERTICAL';
    public const CREATIVE_IMAGE_MODE_PLAYABLE_HORIZONTAL_ToolsAwemeAuthListV2DataListVideoInfoImageMode = 'CREATIVE_IMAGE_MODE_PLAYABLE_HORIZONTAL';
    public const CREATIVE_IMAGE_MODE_PLAYABLE_VERTICAL_ToolsAwemeAuthListV2DataListVideoInfoImageMode = 'CREATIVE_IMAGE_MODE_PLAYABLE_VERTICAL';
    public const CREATIVE_IMAGE_MODE_SMALL_ToolsAwemeAuthListV2DataListVideoInfoImageMode = 'CREATIVE_IMAGE_MODE_SMALL';
    public const CREATIVE_IMAGE_MODE_UNION_SPLASH_ToolsAwemeAuthListV2DataListVideoInfoImageMode = 'CREATIVE_IMAGE_MODE_UNION_SPLASH';
    public const CREATIVE_IMAGE_MODE_UNION_SPLASH_VIDEO_ToolsAwemeAuthListV2DataListVideoInfoImageMode = 'CREATIVE_IMAGE_MODE_UNION_SPLASH_VIDEO';
    public const CREATIVE_IMAGE_MODE_VIDEO_ToolsAwemeAuthListV2DataListVideoInfoImageMode = 'CREATIVE_IMAGE_MODE_VIDEO';
    public const CREATIVE_IMAGE_MODE_VIDEO_VERTICAL_ToolsAwemeAuthListV2DataListVideoInfoImageMode = 'CREATIVE_IMAGE_MODE_VIDEO_VERTICAL';
    public const SEARCH_AD_SMALL_IMAGE_ToolsAwemeAuthListV2DataListVideoInfoImageMode = 'SEARCH_AD_SMALL_IMAGE';
    public const TOUTIAO_SEARCH_AD_IMAGE_ToolsAwemeAuthListV2DataListVideoInfoImageMode = 'TOUTIAO_SEARCH_AD_IMAGE';

    public const ALLOWED_VALUES = [
        self::AWEME_PHOTO_ToolsAwemeAuthListV2DataListVideoInfoImageMode,
        self::CREATIVE_IMAGE_MODE_AWEME_LIVE_ToolsAwemeAuthListV2DataListVideoInfoImageMode,
        self::CREATIVE_IMAGE_MODE_DISPLAY_WINDOW_ToolsAwemeAuthListV2DataListVideoInfoImageMode,
        self::CREATIVE_IMAGE_MODE_GIF_ToolsAwemeAuthListV2DataListVideoInfoImageMode,
        self::CREATIVE_IMAGE_MODE_GROUP_ToolsAwemeAuthListV2DataListVideoInfoImageMode,
        self::CREATIVE_IMAGE_MODE_LARGE_ToolsAwemeAuthListV2DataListVideoInfoImageMode,
        self::CREATIVE_IMAGE_MODE_LARGE_VERTICAL_ToolsAwemeAuthListV2DataListVideoInfoImageMode,
        self::CREATIVE_IMAGE_MODE_PLAYABLE_HORIZONTAL_ToolsAwemeAuthListV2DataListVideoInfoImageMode,
        self::CREATIVE_IMAGE_MODE_PLAYABLE_VERTICAL_ToolsAwemeAuthListV2DataListVideoInfoImageMode,
        self::CREATIVE_IMAGE_MODE_SMALL_ToolsAwemeAuthListV2DataListVideoInfoImageMode,
        self::CREATIVE_IMAGE_MODE_UNION_SPLASH_ToolsAwemeAuthListV2DataListVideoInfoImageMode,
        self::CREATIVE_IMAGE_MODE_UNION_SPLASH_VIDEO_ToolsAwemeAuthListV2DataListVideoInfoImageMode,
        self::CREATIVE_IMAGE_MODE_VIDEO_ToolsAwemeAuthListV2DataListVideoInfoImageMode,
        self::CREATIVE_IMAGE_MODE_VIDEO_VERTICAL_ToolsAwemeAuthListV2DataListVideoInfoImageMode,
        self::SEARCH_AD_SMALL_IMAGE_ToolsAwemeAuthListV2DataListVideoInfoImageMode,
        self::TOUTIAO_SEARCH_AD_IMAGE_ToolsAwemeAuthListV2DataListVideoInfoImageMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAwemeAuthListV2DataListVideoInfoImageMode', $value));
        }
        return (string) $value;
    }
}
