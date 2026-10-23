<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class FileVideoAwemeGetV2DataListImageMode
{
    public const CREATIVE_IMAGE_MODE_AWEME_LIVE_FileVideoAwemeGetV2DataListImageMode = 'CREATIVE_IMAGE_MODE_AWEME_LIVE';
    public const CREATIVE_IMAGE_MODE_DISPLAY_WINDOW_FileVideoAwemeGetV2DataListImageMode = 'CREATIVE_IMAGE_MODE_DISPLAY_WINDOW';
    public const CREATIVE_IMAGE_MODE_GIF_FileVideoAwemeGetV2DataListImageMode = 'CREATIVE_IMAGE_MODE_GIF';
    public const CREATIVE_IMAGE_MODE_GROUP_FileVideoAwemeGetV2DataListImageMode = 'CREATIVE_IMAGE_MODE_GROUP';
    public const CREATIVE_IMAGE_MODE_LARGE_FileVideoAwemeGetV2DataListImageMode = 'CREATIVE_IMAGE_MODE_LARGE';
    public const CREATIVE_IMAGE_MODE_LARGE_VERTICAL_FileVideoAwemeGetV2DataListImageMode = 'CREATIVE_IMAGE_MODE_LARGE_VERTICAL';
    public const CREATIVE_IMAGE_MODE_PLAYABLE_HORIZONTAL_FileVideoAwemeGetV2DataListImageMode = 'CREATIVE_IMAGE_MODE_PLAYABLE_HORIZONTAL';
    public const CREATIVE_IMAGE_MODE_PLAYABLE_VERTICAL_FileVideoAwemeGetV2DataListImageMode = 'CREATIVE_IMAGE_MODE_PLAYABLE_VERTICAL';
    public const CREATIVE_IMAGE_MODE_SMALL_FileVideoAwemeGetV2DataListImageMode = 'CREATIVE_IMAGE_MODE_SMALL';
    public const CREATIVE_IMAGE_MODE_UNION_SPLASH_FileVideoAwemeGetV2DataListImageMode = 'CREATIVE_IMAGE_MODE_UNION_SPLASH';
    public const CREATIVE_IMAGE_MODE_UNION_SPLASH_VIDEO_FileVideoAwemeGetV2DataListImageMode = 'CREATIVE_IMAGE_MODE_UNION_SPLASH_VIDEO';
    public const CREATIVE_IMAGE_MODE_VIDEO_FileVideoAwemeGetV2DataListImageMode = 'CREATIVE_IMAGE_MODE_VIDEO';
    public const CREATIVE_IMAGE_MODE_VIDEO_VERTICAL_FileVideoAwemeGetV2DataListImageMode = 'CREATIVE_IMAGE_MODE_VIDEO_VERTICAL';
    public const SEARCH_AD_SMALL_IMAGE_FileVideoAwemeGetV2DataListImageMode = 'SEARCH_AD_SMALL_IMAGE';
    public const TOUTIAO_SEARCH_AD_IMAGE_FileVideoAwemeGetV2DataListImageMode = 'TOUTIAO_SEARCH_AD_IMAGE';

    public const ALLOWED_VALUES = [
        self::CREATIVE_IMAGE_MODE_AWEME_LIVE_FileVideoAwemeGetV2DataListImageMode,
        self::CREATIVE_IMAGE_MODE_DISPLAY_WINDOW_FileVideoAwemeGetV2DataListImageMode,
        self::CREATIVE_IMAGE_MODE_GIF_FileVideoAwemeGetV2DataListImageMode,
        self::CREATIVE_IMAGE_MODE_GROUP_FileVideoAwemeGetV2DataListImageMode,
        self::CREATIVE_IMAGE_MODE_LARGE_FileVideoAwemeGetV2DataListImageMode,
        self::CREATIVE_IMAGE_MODE_LARGE_VERTICAL_FileVideoAwemeGetV2DataListImageMode,
        self::CREATIVE_IMAGE_MODE_PLAYABLE_HORIZONTAL_FileVideoAwemeGetV2DataListImageMode,
        self::CREATIVE_IMAGE_MODE_PLAYABLE_VERTICAL_FileVideoAwemeGetV2DataListImageMode,
        self::CREATIVE_IMAGE_MODE_SMALL_FileVideoAwemeGetV2DataListImageMode,
        self::CREATIVE_IMAGE_MODE_UNION_SPLASH_FileVideoAwemeGetV2DataListImageMode,
        self::CREATIVE_IMAGE_MODE_UNION_SPLASH_VIDEO_FileVideoAwemeGetV2DataListImageMode,
        self::CREATIVE_IMAGE_MODE_VIDEO_FileVideoAwemeGetV2DataListImageMode,
        self::CREATIVE_IMAGE_MODE_VIDEO_VERTICAL_FileVideoAwemeGetV2DataListImageMode,
        self::SEARCH_AD_SMALL_IMAGE_FileVideoAwemeGetV2DataListImageMode,
        self::TOUTIAO_SEARCH_AD_IMAGE_FileVideoAwemeGetV2DataListImageMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum FileVideoAwemeGetV2DataListImageMode', $value));
        }
        return (string) $value;
    }
}
