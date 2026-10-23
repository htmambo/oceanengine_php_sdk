<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialImageMode
{
    public const AWEME_LIVE_ROOM_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialImageMode = 'AWEME_LIVE_ROOM';
    public const CAROUSEL_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialImageMode = 'CAROUSEL';
    public const LARGE_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialImageMode = 'LARGE';
    public const LARGE_VERTICAL_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialImageMode = 'LARGE_VERTICAL';
    public const SMALL_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialImageMode = 'SMALL';
    public const SQUARE_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialImageMode = 'SQUARE';
    public const UNION_SPLASH_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialImageMode = 'UNION_SPLASH';
    public const VIDEO_LARGE_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialImageMode = 'VIDEO_LARGE';
    public const VIDEO_VERTICAL_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialImageMode = 'VIDEO_VERTICAL';

    public const ALLOWED_VALUES = [
        self::AWEME_LIVE_ROOM_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialImageMode,
        self::CAROUSEL_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialImageMode,
        self::LARGE_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialImageMode,
        self::LARGE_VERTICAL_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialImageMode,
        self::SMALL_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialImageMode,
        self::SQUARE_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialImageMode,
        self::UNION_SPLASH_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialImageMode,
        self::VIDEO_LARGE_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialImageMode,
        self::VIDEO_VERTICAL_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialImageMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialImageMode', $value));
        }
        return (string) $value;
    }
}
