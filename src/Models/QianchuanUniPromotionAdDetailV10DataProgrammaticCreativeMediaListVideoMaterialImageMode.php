<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionAdDetailV10DataProgrammaticCreativeMediaListVideoMaterialImageMode
{
    public const AWEME_LIVE_ROOM_QianchuanUniPromotionAdDetailV10DataProgrammaticCreativeMediaListVideoMaterialImageMode = 'AWEME_LIVE_ROOM';
    public const CAROUSEL_QianchuanUniPromotionAdDetailV10DataProgrammaticCreativeMediaListVideoMaterialImageMode = 'CAROUSEL';
    public const LARGE_QianchuanUniPromotionAdDetailV10DataProgrammaticCreativeMediaListVideoMaterialImageMode = 'LARGE';
    public const LARGE_VERTICAL_QianchuanUniPromotionAdDetailV10DataProgrammaticCreativeMediaListVideoMaterialImageMode = 'LARGE_VERTICAL';
    public const RECTANGLE_QianchuanUniPromotionAdDetailV10DataProgrammaticCreativeMediaListVideoMaterialImageMode = 'RECTANGLE';
    public const SMALL_QianchuanUniPromotionAdDetailV10DataProgrammaticCreativeMediaListVideoMaterialImageMode = 'SMALL';
    public const SQUARE_QianchuanUniPromotionAdDetailV10DataProgrammaticCreativeMediaListVideoMaterialImageMode = 'SQUARE';
    public const UNION_SPLASH_QianchuanUniPromotionAdDetailV10DataProgrammaticCreativeMediaListVideoMaterialImageMode = 'UNION_SPLASH';
    public const VIDEO_LARGE_QianchuanUniPromotionAdDetailV10DataProgrammaticCreativeMediaListVideoMaterialImageMode = 'VIDEO_LARGE';
    public const VIDEO_VERTICAL_QianchuanUniPromotionAdDetailV10DataProgrammaticCreativeMediaListVideoMaterialImageMode = 'VIDEO_VERTICAL';

    public const ALLOWED_VALUES = [
        self::AWEME_LIVE_ROOM_QianchuanUniPromotionAdDetailV10DataProgrammaticCreativeMediaListVideoMaterialImageMode,
        self::CAROUSEL_QianchuanUniPromotionAdDetailV10DataProgrammaticCreativeMediaListVideoMaterialImageMode,
        self::LARGE_QianchuanUniPromotionAdDetailV10DataProgrammaticCreativeMediaListVideoMaterialImageMode,
        self::LARGE_VERTICAL_QianchuanUniPromotionAdDetailV10DataProgrammaticCreativeMediaListVideoMaterialImageMode,
        self::RECTANGLE_QianchuanUniPromotionAdDetailV10DataProgrammaticCreativeMediaListVideoMaterialImageMode,
        self::SMALL_QianchuanUniPromotionAdDetailV10DataProgrammaticCreativeMediaListVideoMaterialImageMode,
        self::SQUARE_QianchuanUniPromotionAdDetailV10DataProgrammaticCreativeMediaListVideoMaterialImageMode,
        self::UNION_SPLASH_QianchuanUniPromotionAdDetailV10DataProgrammaticCreativeMediaListVideoMaterialImageMode,
        self::VIDEO_LARGE_QianchuanUniPromotionAdDetailV10DataProgrammaticCreativeMediaListVideoMaterialImageMode,
        self::VIDEO_VERTICAL_QianchuanUniPromotionAdDetailV10DataProgrammaticCreativeMediaListVideoMaterialImageMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionAdDetailV10DataProgrammaticCreativeMediaListVideoMaterialImageMode', $value));
        }
        return (string) $value;
    }
}
