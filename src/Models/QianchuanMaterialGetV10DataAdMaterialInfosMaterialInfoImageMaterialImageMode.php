<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialImageMode
{
    public const AWEME_LIVE_ROOM_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialImageMode = 'AWEME_LIVE_ROOM';
    public const CAROUSEL_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialImageMode = 'CAROUSEL';
    public const LARGE_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialImageMode = 'LARGE';
    public const LARGE_VERTICAL_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialImageMode = 'LARGE_VERTICAL';
    public const SMALL_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialImageMode = 'SMALL';
    public const SQUARE_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialImageMode = 'SQUARE';
    public const UNION_SPLASH_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialImageMode = 'UNION_SPLASH';
    public const VIDEO_LARGE_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialImageMode = 'VIDEO_LARGE';
    public const VIDEO_VERTICAL_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialImageMode = 'VIDEO_VERTICAL';

    public const ALLOWED_VALUES = [
        self::AWEME_LIVE_ROOM_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialImageMode,
        self::CAROUSEL_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialImageMode,
        self::LARGE_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialImageMode,
        self::LARGE_VERTICAL_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialImageMode,
        self::SMALL_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialImageMode,
        self::SQUARE_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialImageMode,
        self::UNION_SPLASH_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialImageMode,
        self::VIDEO_LARGE_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialImageMode,
        self::VIDEO_VERTICAL_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialImageMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialImageMode', $value));
        }
        return (string) $value;
    }
}
