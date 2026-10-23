<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdUpdateV10CreativeListImageMode
{
    public const AWEME_LIVE_ROOM_QianchuanAdUpdateV10CreativeListImageMode = 'AWEME_LIVE_ROOM';
    public const CAROUSEL_QianchuanAdUpdateV10CreativeListImageMode = 'CAROUSEL';
    public const LARGE_QianchuanAdUpdateV10CreativeListImageMode = 'LARGE';
    public const LARGE_VERTICAL_QianchuanAdUpdateV10CreativeListImageMode = 'LARGE_VERTICAL';
    public const SMALL_QianchuanAdUpdateV10CreativeListImageMode = 'SMALL';
    public const SQUARE_QianchuanAdUpdateV10CreativeListImageMode = 'SQUARE';
    public const UNION_SPLASH_QianchuanAdUpdateV10CreativeListImageMode = 'UNION_SPLASH';
    public const VIDEO_LARGE_QianchuanAdUpdateV10CreativeListImageMode = 'VIDEO_LARGE';
    public const VIDEO_VERTICAL_QianchuanAdUpdateV10CreativeListImageMode = 'VIDEO_VERTICAL';

    public const ALLOWED_VALUES = [
        self::AWEME_LIVE_ROOM_QianchuanAdUpdateV10CreativeListImageMode,
        self::CAROUSEL_QianchuanAdUpdateV10CreativeListImageMode,
        self::LARGE_QianchuanAdUpdateV10CreativeListImageMode,
        self::LARGE_VERTICAL_QianchuanAdUpdateV10CreativeListImageMode,
        self::SMALL_QianchuanAdUpdateV10CreativeListImageMode,
        self::SQUARE_QianchuanAdUpdateV10CreativeListImageMode,
        self::UNION_SPLASH_QianchuanAdUpdateV10CreativeListImageMode,
        self::VIDEO_LARGE_QianchuanAdUpdateV10CreativeListImageMode,
        self::VIDEO_VERTICAL_QianchuanAdUpdateV10CreativeListImageMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdUpdateV10CreativeListImageMode', $value));
        }
        return (string) $value;
    }
}
