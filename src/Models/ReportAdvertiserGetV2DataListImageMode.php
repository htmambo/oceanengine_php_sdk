<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportAdvertiserGetV2DataListImageMode
{
    public const CREATIVE_IMAGE_MODE_DISPLAY_WINDOW_ReportAdvertiserGetV2DataListImageMode = 'CREATIVE_IMAGE_MODE_DISPLAY_WINDOW';
    public const CREATIVE_IMAGE_MODE_LARGE_ReportAdvertiserGetV2DataListImageMode = 'CREATIVE_IMAGE_MODE_LARGE';
    public const CREATIVE_IMAGE_MODE_AWEME_LIVE_ReportAdvertiserGetV2DataListImageMode = 'CREATIVE_IMAGE_MODE_AWEME_LIVE';
    public const CREATIVE_IMAGE_MODE_VIDEO_ReportAdvertiserGetV2DataListImageMode = 'CREATIVE_IMAGE_MODE_VIDEO';
    public const SEARCH_AD_SMALL_IMAGE_ReportAdvertiserGetV2DataListImageMode = 'SEARCH_AD_SMALL_IMAGE';
    public const CREATIVE_IMAGE_MODE_PLAYABLE_HORIZONTAL_ReportAdvertiserGetV2DataListImageMode = 'CREATIVE_IMAGE_MODE_PLAYABLE_HORIZONTAL';
    public const MATERIAL_IMAGE_MODE_TITLE_ReportAdvertiserGetV2DataListImageMode = 'MATERIAL_IMAGE_MODE_TITLE';
    public const CREATIVE_IMAGE_MODE_UNION_SPLASH_ReportAdvertiserGetV2DataListImageMode = 'CREATIVE_IMAGE_MODE_UNION_SPLASH';
    public const CREATIVE_IMAGE_MODE_GROUP_ReportAdvertiserGetV2DataListImageMode = 'CREATIVE_IMAGE_MODE_GROUP';
    public const CREATIVE_IMAGE_MODE_GIF_ReportAdvertiserGetV2DataListImageMode = 'CREATIVE_IMAGE_MODE_GIF';
    public const CREATIVE_IMAGE_MODE_VIDEO_VERTICAL_ReportAdvertiserGetV2DataListImageMode = 'CREATIVE_IMAGE_MODE_VIDEO_VERTICAL';
    public const TOUTIAO_SEARCH_AD_IMAGE_ReportAdvertiserGetV2DataListImageMode = 'TOUTIAO_SEARCH_AD_IMAGE';
    public const CREATIVE_IMAGE_MODE_UNION_SPLASH_VIDEO_ReportAdvertiserGetV2DataListImageMode = 'CREATIVE_IMAGE_MODE_UNION_SPLASH_VIDEO';
    public const CREATIVE_IMAGE_MODE_PLAYABLE_VERTICAL_ReportAdvertiserGetV2DataListImageMode = 'CREATIVE_IMAGE_MODE_PLAYABLE_VERTICAL';
    public const CREATIVE_IMAGE_MODE_SMALL_ReportAdvertiserGetV2DataListImageMode = 'CREATIVE_IMAGE_MODE_SMALL';
    public const CREATIVE_IMAGE_MODE_DECORATION_COUPON_ReportAdvertiserGetV2DataListImageMode = 'CREATIVE_IMAGE_MODE_DECORATION_COUPON';
    public const CREATIVE_IMAGE_MODE_LARGE_VERTICAL_ReportAdvertiserGetV2DataListImageMode = 'CREATIVE_IMAGE_MODE_LARGE_VERTICAL';

    public const ALLOWED_VALUES = [
        self::CREATIVE_IMAGE_MODE_DISPLAY_WINDOW_ReportAdvertiserGetV2DataListImageMode,
        self::CREATIVE_IMAGE_MODE_LARGE_ReportAdvertiserGetV2DataListImageMode,
        self::CREATIVE_IMAGE_MODE_AWEME_LIVE_ReportAdvertiserGetV2DataListImageMode,
        self::CREATIVE_IMAGE_MODE_VIDEO_ReportAdvertiserGetV2DataListImageMode,
        self::SEARCH_AD_SMALL_IMAGE_ReportAdvertiserGetV2DataListImageMode,
        self::CREATIVE_IMAGE_MODE_PLAYABLE_HORIZONTAL_ReportAdvertiserGetV2DataListImageMode,
        self::MATERIAL_IMAGE_MODE_TITLE_ReportAdvertiserGetV2DataListImageMode,
        self::CREATIVE_IMAGE_MODE_UNION_SPLASH_ReportAdvertiserGetV2DataListImageMode,
        self::CREATIVE_IMAGE_MODE_GROUP_ReportAdvertiserGetV2DataListImageMode,
        self::CREATIVE_IMAGE_MODE_GIF_ReportAdvertiserGetV2DataListImageMode,
        self::CREATIVE_IMAGE_MODE_VIDEO_VERTICAL_ReportAdvertiserGetV2DataListImageMode,
        self::TOUTIAO_SEARCH_AD_IMAGE_ReportAdvertiserGetV2DataListImageMode,
        self::CREATIVE_IMAGE_MODE_UNION_SPLASH_VIDEO_ReportAdvertiserGetV2DataListImageMode,
        self::CREATIVE_IMAGE_MODE_PLAYABLE_VERTICAL_ReportAdvertiserGetV2DataListImageMode,
        self::CREATIVE_IMAGE_MODE_SMALL_ReportAdvertiserGetV2DataListImageMode,
        self::CREATIVE_IMAGE_MODE_DECORATION_COUPON_ReportAdvertiserGetV2DataListImageMode,
        self::CREATIVE_IMAGE_MODE_LARGE_VERTICAL_ReportAdvertiserGetV2DataListImageMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportAdvertiserGetV2DataListImageMode', $value));
        }
        return (string) $value;
    }
}
