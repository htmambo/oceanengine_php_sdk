<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosImageMode
{
    public const AWEME_PHOTO_ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosImageMode = 'AWEME_PHOTO';
    public const CREATIVE_IMAGE_MODE_AWEME_LIVE_ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosImageMode = 'CREATIVE_IMAGE_MODE_AWEME_LIVE';
    public const CREATIVE_IMAGE_MODE_CALIBRATION_FREE_SINGLE_IMAGE_ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosImageMode = 'CREATIVE_IMAGE_MODE_CALIBRATION_FREE_SINGLE_IMAGE';
    public const CREATIVE_IMAGE_MODE_CALIBRATION_FREE_VIDEO_ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosImageMode = 'CREATIVE_IMAGE_MODE_CALIBRATION_FREE_VIDEO';
    public const CREATIVE_IMAGE_MODE_DISPLAY_WINDOW_ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosImageMode = 'CREATIVE_IMAGE_MODE_DISPLAY_WINDOW';
    public const CREATIVE_IMAGE_MODE_GIF_ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosImageMode = 'CREATIVE_IMAGE_MODE_GIF';
    public const CREATIVE_IMAGE_MODE_GROUP_ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosImageMode = 'CREATIVE_IMAGE_MODE_GROUP';
    public const CREATIVE_IMAGE_MODE_LARGE_ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosImageMode = 'CREATIVE_IMAGE_MODE_LARGE';
    public const CREATIVE_IMAGE_MODE_LARGE_VERTICAL_ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosImageMode = 'CREATIVE_IMAGE_MODE_LARGE_VERTICAL';
    public const CREATIVE_IMAGE_MODE_PLAYABLE_HORIZONTAL_ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosImageMode = 'CREATIVE_IMAGE_MODE_PLAYABLE_HORIZONTAL';
    public const CREATIVE_IMAGE_MODE_PLAYABLE_VERTICAL_ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosImageMode = 'CREATIVE_IMAGE_MODE_PLAYABLE_VERTICAL';
    public const CREATIVE_IMAGE_MODE_SMALL_ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosImageMode = 'CREATIVE_IMAGE_MODE_SMALL';
    public const CREATIVE_IMAGE_MODE_UNION_SPLASH_ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosImageMode = 'CREATIVE_IMAGE_MODE_UNION_SPLASH';
    public const CREATIVE_IMAGE_MODE_UNION_SPLASH_VIDEO_ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosImageMode = 'CREATIVE_IMAGE_MODE_UNION_SPLASH_VIDEO';
    public const CREATIVE_IMAGE_MODE_VIDEO_ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosImageMode = 'CREATIVE_IMAGE_MODE_VIDEO';
    public const CREATIVE_IMAGE_MODE_VIDEO_VERTICAL_ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosImageMode = 'CREATIVE_IMAGE_MODE_VIDEO_VERTICAL';
    public const SEARCH_AD_SMALL_IMAGE_ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosImageMode = 'SEARCH_AD_SMALL_IMAGE';
    public const TOUTIAO_SEARCH_AD_IMAGE_ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosImageMode = 'TOUTIAO_SEARCH_AD_IMAGE';

    public const ALLOWED_VALUES = [
        self::AWEME_PHOTO_ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosImageMode,
        self::CREATIVE_IMAGE_MODE_AWEME_LIVE_ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosImageMode,
        self::CREATIVE_IMAGE_MODE_CALIBRATION_FREE_SINGLE_IMAGE_ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosImageMode,
        self::CREATIVE_IMAGE_MODE_CALIBRATION_FREE_VIDEO_ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosImageMode,
        self::CREATIVE_IMAGE_MODE_DISPLAY_WINDOW_ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosImageMode,
        self::CREATIVE_IMAGE_MODE_GIF_ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosImageMode,
        self::CREATIVE_IMAGE_MODE_GROUP_ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosImageMode,
        self::CREATIVE_IMAGE_MODE_LARGE_ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosImageMode,
        self::CREATIVE_IMAGE_MODE_LARGE_VERTICAL_ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosImageMode,
        self::CREATIVE_IMAGE_MODE_PLAYABLE_HORIZONTAL_ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosImageMode,
        self::CREATIVE_IMAGE_MODE_PLAYABLE_VERTICAL_ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosImageMode,
        self::CREATIVE_IMAGE_MODE_SMALL_ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosImageMode,
        self::CREATIVE_IMAGE_MODE_UNION_SPLASH_ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosImageMode,
        self::CREATIVE_IMAGE_MODE_UNION_SPLASH_VIDEO_ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosImageMode,
        self::CREATIVE_IMAGE_MODE_VIDEO_ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosImageMode,
        self::CREATIVE_IMAGE_MODE_VIDEO_VERTICAL_ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosImageMode,
        self::SEARCH_AD_SMALL_IMAGE_ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosImageMode,
        self::TOUTIAO_SEARCH_AD_IMAGE_ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosImageMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosImageMode', $value));
        }
        return (string) $value;
    }
}
