<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListVideoMaterialImageMode
{
    public const AWEME_LIVE_ROOM_QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListVideoMaterialImageMode = 'AWEME_LIVE_ROOM';
    public const CAROUSEL_QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListVideoMaterialImageMode = 'CAROUSEL';
    public const LARGE_QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListVideoMaterialImageMode = 'LARGE';
    public const LARGE_VERTICAL_QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListVideoMaterialImageMode = 'LARGE_VERTICAL';
    public const RECTANGLE_QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListVideoMaterialImageMode = 'RECTANGLE';
    public const SMALL_QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListVideoMaterialImageMode = 'SMALL';
    public const SQUARE_QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListVideoMaterialImageMode = 'SQUARE';
    public const UNION_SPLASH_QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListVideoMaterialImageMode = 'UNION_SPLASH';
    public const VIDEO_LARGE_QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListVideoMaterialImageMode = 'VIDEO_LARGE';
    public const VIDEO_VERTICAL_QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListVideoMaterialImageMode = 'VIDEO_VERTICAL';

    public const ALLOWED_VALUES = [
        self::AWEME_LIVE_ROOM_QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListVideoMaterialImageMode,
        self::CAROUSEL_QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListVideoMaterialImageMode,
        self::LARGE_QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListVideoMaterialImageMode,
        self::LARGE_VERTICAL_QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListVideoMaterialImageMode,
        self::RECTANGLE_QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListVideoMaterialImageMode,
        self::SMALL_QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListVideoMaterialImageMode,
        self::SQUARE_QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListVideoMaterialImageMode,
        self::UNION_SPLASH_QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListVideoMaterialImageMode,
        self::VIDEO_LARGE_QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListVideoMaterialImageMode,
        self::VIDEO_VERTICAL_QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListVideoMaterialImageMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListVideoMaterialImageMode', $value));
        }
        return (string) $value;
    }
}
