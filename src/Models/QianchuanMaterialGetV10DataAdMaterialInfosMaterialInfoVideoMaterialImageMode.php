<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialImageMode
{
    public const AWEME_LIVE_ROOM_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialImageMode = 'AWEME_LIVE_ROOM';
    public const CAROUSEL_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialImageMode = 'CAROUSEL';
    public const LARGE_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialImageMode = 'LARGE';
    public const LARGE_VERTICAL_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialImageMode = 'LARGE_VERTICAL';
    public const SMALL_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialImageMode = 'SMALL';
    public const SQUARE_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialImageMode = 'SQUARE';
    public const UNION_SPLASH_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialImageMode = 'UNION_SPLASH';
    public const VIDEO_LARGE_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialImageMode = 'VIDEO_LARGE';
    public const VIDEO_VERTICAL_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialImageMode = 'VIDEO_VERTICAL';

    public const ALLOWED_VALUES = [
        self::AWEME_LIVE_ROOM_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialImageMode,
        self::CAROUSEL_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialImageMode,
        self::LARGE_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialImageMode,
        self::LARGE_VERTICAL_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialImageMode,
        self::SMALL_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialImageMode,
        self::SQUARE_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialImageMode,
        self::UNION_SPLASH_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialImageMode,
        self::VIDEO_LARGE_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialImageMode,
        self::VIDEO_VERTICAL_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialImageMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialImageMode', $value));
        }
        return (string) $value;
    }
}
