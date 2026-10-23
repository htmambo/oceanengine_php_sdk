<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportAdGetV2FilteringImageModes
{
    public const CREATIVE_IMAGE_MODE_DISPLAY_WINDOW_ReportAdGetV2FilteringImageModes = 'CREATIVE_IMAGE_MODE_DISPLAY_WINDOW';
    public const CREATIVE_IMAGE_MODE_LARGE_ReportAdGetV2FilteringImageModes = 'CREATIVE_IMAGE_MODE_LARGE';
    public const CREATIVE_IMAGE_MODE_AWEME_LIVE_ReportAdGetV2FilteringImageModes = 'CREATIVE_IMAGE_MODE_AWEME_LIVE';
    public const CREATIVE_IMAGE_MODE_VIDEO_ReportAdGetV2FilteringImageModes = 'CREATIVE_IMAGE_MODE_VIDEO';
    public const SEARCH_AD_SMALL_IMAGE_ReportAdGetV2FilteringImageModes = 'SEARCH_AD_SMALL_IMAGE';
    public const CREATIVE_IMAGE_MODE_UNION_SPLASH_ReportAdGetV2FilteringImageModes = 'CREATIVE_IMAGE_MODE_UNION_SPLASH';
    public const CREATIVE_IMAGE_MODE_GROUP_ReportAdGetV2FilteringImageModes = 'CREATIVE_IMAGE_MODE_GROUP';
    public const CREATIVE_IMAGE_MODE_GIF_ReportAdGetV2FilteringImageModes = 'CREATIVE_IMAGE_MODE_GIF';
    public const CREATIVE_IMAGE_MODE_VIDEO_VERTICAL_ReportAdGetV2FilteringImageModes = 'CREATIVE_IMAGE_MODE_VIDEO_VERTICAL';
    public const TOUTIAO_SEARCH_AD_IMAGE_ReportAdGetV2FilteringImageModes = 'TOUTIAO_SEARCH_AD_IMAGE';
    public const CREATIVE_IMAGE_MODE_UNION_SPLASH_VIDEO_ReportAdGetV2FilteringImageModes = 'CREATIVE_IMAGE_MODE_UNION_SPLASH_VIDEO';
    public const CREATIVE_IMAGE_MODE_SMALL_ReportAdGetV2FilteringImageModes = 'CREATIVE_IMAGE_MODE_SMALL';
    public const CREATIVE_IMAGE_MODE_DECORATION_COUPON_ReportAdGetV2FilteringImageModes = 'CREATIVE_IMAGE_MODE_DECORATION_COUPON';
    public const CREATIVE_IMAGE_MODE_LARGE_VERTICAL_ReportAdGetV2FilteringImageModes = 'CREATIVE_IMAGE_MODE_LARGE_VERTICAL';

    public const ALLOWED_VALUES = [
        self::CREATIVE_IMAGE_MODE_DISPLAY_WINDOW_ReportAdGetV2FilteringImageModes,
        self::CREATIVE_IMAGE_MODE_LARGE_ReportAdGetV2FilteringImageModes,
        self::CREATIVE_IMAGE_MODE_AWEME_LIVE_ReportAdGetV2FilteringImageModes,
        self::CREATIVE_IMAGE_MODE_VIDEO_ReportAdGetV2FilteringImageModes,
        self::SEARCH_AD_SMALL_IMAGE_ReportAdGetV2FilteringImageModes,
        self::CREATIVE_IMAGE_MODE_UNION_SPLASH_ReportAdGetV2FilteringImageModes,
        self::CREATIVE_IMAGE_MODE_GROUP_ReportAdGetV2FilteringImageModes,
        self::CREATIVE_IMAGE_MODE_GIF_ReportAdGetV2FilteringImageModes,
        self::CREATIVE_IMAGE_MODE_VIDEO_VERTICAL_ReportAdGetV2FilteringImageModes,
        self::TOUTIAO_SEARCH_AD_IMAGE_ReportAdGetV2FilteringImageModes,
        self::CREATIVE_IMAGE_MODE_UNION_SPLASH_VIDEO_ReportAdGetV2FilteringImageModes,
        self::CREATIVE_IMAGE_MODE_SMALL_ReportAdGetV2FilteringImageModes,
        self::CREATIVE_IMAGE_MODE_DECORATION_COUPON_ReportAdGetV2FilteringImageModes,
        self::CREATIVE_IMAGE_MODE_LARGE_VERTICAL_ReportAdGetV2FilteringImageModes,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportAdGetV2FilteringImageModes', $value));
        }
        return (string) $value;
    }
}
