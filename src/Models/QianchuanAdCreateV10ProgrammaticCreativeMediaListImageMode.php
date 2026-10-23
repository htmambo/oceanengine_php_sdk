<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdCreateV10ProgrammaticCreativeMediaListImageMode
{
    public const AWEME_LIVE_ROOM_QianchuanAdCreateV10ProgrammaticCreativeMediaListImageMode = 'AWEME_LIVE_ROOM';
    public const CAROUSEL_QianchuanAdCreateV10ProgrammaticCreativeMediaListImageMode = 'CAROUSEL';
    public const LARGE_QianchuanAdCreateV10ProgrammaticCreativeMediaListImageMode = 'LARGE';
    public const LARGE_VERTICAL_QianchuanAdCreateV10ProgrammaticCreativeMediaListImageMode = 'LARGE_VERTICAL';
    public const SMALL_QianchuanAdCreateV10ProgrammaticCreativeMediaListImageMode = 'SMALL';
    public const SQUARE_QianchuanAdCreateV10ProgrammaticCreativeMediaListImageMode = 'SQUARE';
    public const UNION_SPLASH_QianchuanAdCreateV10ProgrammaticCreativeMediaListImageMode = 'UNION_SPLASH';
    public const VIDEO_LARGE_QianchuanAdCreateV10ProgrammaticCreativeMediaListImageMode = 'VIDEO_LARGE';
    public const VIDEO_VERTICAL_QianchuanAdCreateV10ProgrammaticCreativeMediaListImageMode = 'VIDEO_VERTICAL';

    public const ALLOWED_VALUES = [
        self::AWEME_LIVE_ROOM_QianchuanAdCreateV10ProgrammaticCreativeMediaListImageMode,
        self::CAROUSEL_QianchuanAdCreateV10ProgrammaticCreativeMediaListImageMode,
        self::LARGE_QianchuanAdCreateV10ProgrammaticCreativeMediaListImageMode,
        self::LARGE_VERTICAL_QianchuanAdCreateV10ProgrammaticCreativeMediaListImageMode,
        self::SMALL_QianchuanAdCreateV10ProgrammaticCreativeMediaListImageMode,
        self::SQUARE_QianchuanAdCreateV10ProgrammaticCreativeMediaListImageMode,
        self::UNION_SPLASH_QianchuanAdCreateV10ProgrammaticCreativeMediaListImageMode,
        self::VIDEO_LARGE_QianchuanAdCreateV10ProgrammaticCreativeMediaListImageMode,
        self::VIDEO_VERTICAL_QianchuanAdCreateV10ProgrammaticCreativeMediaListImageMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdCreateV10ProgrammaticCreativeMediaListImageMode', $value));
        }
        return (string) $value;
    }
}
