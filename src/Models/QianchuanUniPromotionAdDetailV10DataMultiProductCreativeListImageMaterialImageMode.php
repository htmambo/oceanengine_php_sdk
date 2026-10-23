<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListImageMaterialImageMode
{
    public const AWEME_LIVE_ROOM_QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListImageMaterialImageMode = 'AWEME_LIVE_ROOM';
    public const CAROUSEL_QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListImageMaterialImageMode = 'CAROUSEL';
    public const LARGE_QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListImageMaterialImageMode = 'LARGE';
    public const LARGE_VERTICAL_QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListImageMaterialImageMode = 'LARGE_VERTICAL';
    public const RECTANGLE_QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListImageMaterialImageMode = 'RECTANGLE';
    public const SMALL_QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListImageMaterialImageMode = 'SMALL';
    public const SQUARE_QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListImageMaterialImageMode = 'SQUARE';
    public const UNION_SPLASH_QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListImageMaterialImageMode = 'UNION_SPLASH';
    public const VIDEO_LARGE_QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListImageMaterialImageMode = 'VIDEO_LARGE';
    public const VIDEO_VERTICAL_QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListImageMaterialImageMode = 'VIDEO_VERTICAL';

    public const ALLOWED_VALUES = [
        self::AWEME_LIVE_ROOM_QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListImageMaterialImageMode,
        self::CAROUSEL_QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListImageMaterialImageMode,
        self::LARGE_QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListImageMaterialImageMode,
        self::LARGE_VERTICAL_QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListImageMaterialImageMode,
        self::RECTANGLE_QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListImageMaterialImageMode,
        self::SMALL_QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListImageMaterialImageMode,
        self::SQUARE_QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListImageMaterialImageMode,
        self::UNION_SPLASH_QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListImageMaterialImageMode,
        self::VIDEO_LARGE_QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListImageMaterialImageMode,
        self::VIDEO_VERTICAL_QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListImageMaterialImageMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListImageMaterialImageMode', $value));
        }
        return (string) $value;
    }
}
