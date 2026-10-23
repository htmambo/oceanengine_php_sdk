<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionAdSuggestionV10DataListImageMaterialImageMode
{
    public const AWEME_LIVE_ROOM_QianchuanUniPromotionAdSuggestionV10DataListImageMaterialImageMode = 'AWEME_LIVE_ROOM';
    public const CAROUSEL_QianchuanUniPromotionAdSuggestionV10DataListImageMaterialImageMode = 'CAROUSEL';
    public const LARGE_QianchuanUniPromotionAdSuggestionV10DataListImageMaterialImageMode = 'LARGE';
    public const LARGE_VERTICAL_QianchuanUniPromotionAdSuggestionV10DataListImageMaterialImageMode = 'LARGE_VERTICAL';
    public const SMALL_QianchuanUniPromotionAdSuggestionV10DataListImageMaterialImageMode = 'SMALL';
    public const SQUARE_QianchuanUniPromotionAdSuggestionV10DataListImageMaterialImageMode = 'SQUARE';
    public const UNION_SPLASH_QianchuanUniPromotionAdSuggestionV10DataListImageMaterialImageMode = 'UNION_SPLASH';
    public const VIDEO_LARGE_QianchuanUniPromotionAdSuggestionV10DataListImageMaterialImageMode = 'VIDEO_LARGE';
    public const VIDEO_VERTICAL_QianchuanUniPromotionAdSuggestionV10DataListImageMaterialImageMode = 'VIDEO_VERTICAL';

    public const ALLOWED_VALUES = [
        self::AWEME_LIVE_ROOM_QianchuanUniPromotionAdSuggestionV10DataListImageMaterialImageMode,
        self::CAROUSEL_QianchuanUniPromotionAdSuggestionV10DataListImageMaterialImageMode,
        self::LARGE_QianchuanUniPromotionAdSuggestionV10DataListImageMaterialImageMode,
        self::LARGE_VERTICAL_QianchuanUniPromotionAdSuggestionV10DataListImageMaterialImageMode,
        self::SMALL_QianchuanUniPromotionAdSuggestionV10DataListImageMaterialImageMode,
        self::SQUARE_QianchuanUniPromotionAdSuggestionV10DataListImageMaterialImageMode,
        self::UNION_SPLASH_QianchuanUniPromotionAdSuggestionV10DataListImageMaterialImageMode,
        self::VIDEO_LARGE_QianchuanUniPromotionAdSuggestionV10DataListImageMaterialImageMode,
        self::VIDEO_VERTICAL_QianchuanUniPromotionAdSuggestionV10DataListImageMaterialImageMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionAdSuggestionV10DataListImageMaterialImageMode', $value));
        }
        return (string) $value;
    }
}
