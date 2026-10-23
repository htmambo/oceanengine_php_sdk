<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialImageMode
{
    public const AWEME_LIVE_ROOM_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialImageMode = 'AWEME_LIVE_ROOM';
    public const CAROUSEL_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialImageMode = 'CAROUSEL';
    public const LARGE_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialImageMode = 'LARGE';
    public const LARGE_VERTICAL_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialImageMode = 'LARGE_VERTICAL';
    public const SMALL_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialImageMode = 'SMALL';
    public const SQUARE_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialImageMode = 'SQUARE';
    public const UNION_SPLASH_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialImageMode = 'UNION_SPLASH';
    public const VIDEO_LARGE_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialImageMode = 'VIDEO_LARGE';
    public const VIDEO_VERTICAL_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialImageMode = 'VIDEO_VERTICAL';

    public const ALLOWED_VALUES = [
        self::AWEME_LIVE_ROOM_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialImageMode,
        self::CAROUSEL_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialImageMode,
        self::LARGE_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialImageMode,
        self::LARGE_VERTICAL_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialImageMode,
        self::SMALL_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialImageMode,
        self::SQUARE_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialImageMode,
        self::UNION_SPLASH_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialImageMode,
        self::VIDEO_LARGE_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialImageMode,
        self::VIDEO_VERTICAL_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialImageMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialImageMode', $value));
        }
        return (string) $value;
    }
}
