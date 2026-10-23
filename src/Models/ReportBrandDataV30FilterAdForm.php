<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportBrandDataV30FilterAdForm
{
    public const AWEME_LBS_ReportBrandDataV30FilterAdForm = 'AWEME_LBS';
    public const CONTENTRECOMMEND_ReportBrandDataV30FilterAdForm = 'CONTENTRECOMMEND';
    public const CONTENTRECOMMEND_NO_GRASS_ReportBrandDataV30FilterAdForm = 'CONTENTRECOMMEND_NO_GRASS';
    public const CONTENTSERVICE_ReportBrandDataV30FilterAdForm = 'CONTENTSERVICE';
    public const CONTENTSERVICE_NO_GRASS_ReportBrandDataV30FilterAdForm = 'CONTENTSERVICE_NO_GRASS';
    public const FEED_ReportBrandDataV30FilterAdForm = 'FEED';
    public const FEEDSLIVE_AD_ReportBrandDataV30FilterAdForm = 'FEEDSLIVE_AD';
    public const FEEDSLIVE_SERVICE_ReportBrandDataV30FilterAdForm = 'FEEDSLIVE_SERVICE';
    public const LITE_FEED_ReportBrandDataV30FilterAdForm = 'LITE_FEED';
    public const NEW_PLANT_GRASS_ReportBrandDataV30FilterAdForm = 'NEW_PLANT_GRASS';
    public const SPLASH_ReportBrandDataV30FilterAdForm = 'SPLASH';
    public const VIDEOLIVE_AD_ReportBrandDataV30FilterAdForm = 'VIDEOLIVE_AD';

    public const ALLOWED_VALUES = [
        self::AWEME_LBS_ReportBrandDataV30FilterAdForm,
        self::CONTENTRECOMMEND_ReportBrandDataV30FilterAdForm,
        self::CONTENTRECOMMEND_NO_GRASS_ReportBrandDataV30FilterAdForm,
        self::CONTENTSERVICE_ReportBrandDataV30FilterAdForm,
        self::CONTENTSERVICE_NO_GRASS_ReportBrandDataV30FilterAdForm,
        self::FEED_ReportBrandDataV30FilterAdForm,
        self::FEEDSLIVE_AD_ReportBrandDataV30FilterAdForm,
        self::FEEDSLIVE_SERVICE_ReportBrandDataV30FilterAdForm,
        self::LITE_FEED_ReportBrandDataV30FilterAdForm,
        self::NEW_PLANT_GRASS_ReportBrandDataV30FilterAdForm,
        self::SPLASH_ReportBrandDataV30FilterAdForm,
        self::VIDEOLIVE_AD_ReportBrandDataV30FilterAdForm,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportBrandDataV30FilterAdForm', $value));
        }
        return (string) $value;
    }
}
