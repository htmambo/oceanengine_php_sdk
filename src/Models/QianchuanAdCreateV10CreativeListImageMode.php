<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdCreateV10CreativeListImageMode
{
    public const AWEME_LIVE_ROOM_QianchuanAdCreateV10CreativeListImageMode = 'AWEME_LIVE_ROOM';
    public const CAROUSEL_QianchuanAdCreateV10CreativeListImageMode = 'CAROUSEL';
    public const LARGE_QianchuanAdCreateV10CreativeListImageMode = 'LARGE';
    public const LARGE_VERTICAL_QianchuanAdCreateV10CreativeListImageMode = 'LARGE_VERTICAL';
    public const SMALL_QianchuanAdCreateV10CreativeListImageMode = 'SMALL';
    public const SQUARE_QianchuanAdCreateV10CreativeListImageMode = 'SQUARE';
    public const UNION_SPLASH_QianchuanAdCreateV10CreativeListImageMode = 'UNION_SPLASH';
    public const VIDEO_LARGE_QianchuanAdCreateV10CreativeListImageMode = 'VIDEO_LARGE';
    public const VIDEO_VERTICAL_QianchuanAdCreateV10CreativeListImageMode = 'VIDEO_VERTICAL';

    public const ALLOWED_VALUES = [
        self::AWEME_LIVE_ROOM_QianchuanAdCreateV10CreativeListImageMode,
        self::CAROUSEL_QianchuanAdCreateV10CreativeListImageMode,
        self::LARGE_QianchuanAdCreateV10CreativeListImageMode,
        self::LARGE_VERTICAL_QianchuanAdCreateV10CreativeListImageMode,
        self::SMALL_QianchuanAdCreateV10CreativeListImageMode,
        self::SQUARE_QianchuanAdCreateV10CreativeListImageMode,
        self::UNION_SPLASH_QianchuanAdCreateV10CreativeListImageMode,
        self::VIDEO_LARGE_QianchuanAdCreateV10CreativeListImageMode,
        self::VIDEO_VERTICAL_QianchuanAdCreateV10CreativeListImageMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdCreateV10CreativeListImageMode', $value));
        }
        return (string) $value;
    }
}
