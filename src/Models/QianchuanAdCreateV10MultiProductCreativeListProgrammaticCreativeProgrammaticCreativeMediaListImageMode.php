<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdCreateV10MultiProductCreativeListProgrammaticCreativeProgrammaticCreativeMediaListImageMode
{
    public const AWEME_LIVE_ROOM_QianchuanAdCreateV10MultiProductCreativeListProgrammaticCreativeProgrammaticCreativeMediaListImageMode = 'AWEME_LIVE_ROOM';
    public const CAROUSEL_QianchuanAdCreateV10MultiProductCreativeListProgrammaticCreativeProgrammaticCreativeMediaListImageMode = 'CAROUSEL';
    public const LARGE_QianchuanAdCreateV10MultiProductCreativeListProgrammaticCreativeProgrammaticCreativeMediaListImageMode = 'LARGE';
    public const LARGE_VERTICAL_QianchuanAdCreateV10MultiProductCreativeListProgrammaticCreativeProgrammaticCreativeMediaListImageMode = 'LARGE_VERTICAL';
    public const SMALL_QianchuanAdCreateV10MultiProductCreativeListProgrammaticCreativeProgrammaticCreativeMediaListImageMode = 'SMALL';
    public const SQUARE_QianchuanAdCreateV10MultiProductCreativeListProgrammaticCreativeProgrammaticCreativeMediaListImageMode = 'SQUARE';
    public const UNION_SPLASH_QianchuanAdCreateV10MultiProductCreativeListProgrammaticCreativeProgrammaticCreativeMediaListImageMode = 'UNION_SPLASH';
    public const VIDEO_LARGE_QianchuanAdCreateV10MultiProductCreativeListProgrammaticCreativeProgrammaticCreativeMediaListImageMode = 'VIDEO_LARGE';
    public const VIDEO_VERTICAL_QianchuanAdCreateV10MultiProductCreativeListProgrammaticCreativeProgrammaticCreativeMediaListImageMode = 'VIDEO_VERTICAL';

    public const ALLOWED_VALUES = [
        self::AWEME_LIVE_ROOM_QianchuanAdCreateV10MultiProductCreativeListProgrammaticCreativeProgrammaticCreativeMediaListImageMode,
        self::CAROUSEL_QianchuanAdCreateV10MultiProductCreativeListProgrammaticCreativeProgrammaticCreativeMediaListImageMode,
        self::LARGE_QianchuanAdCreateV10MultiProductCreativeListProgrammaticCreativeProgrammaticCreativeMediaListImageMode,
        self::LARGE_VERTICAL_QianchuanAdCreateV10MultiProductCreativeListProgrammaticCreativeProgrammaticCreativeMediaListImageMode,
        self::SMALL_QianchuanAdCreateV10MultiProductCreativeListProgrammaticCreativeProgrammaticCreativeMediaListImageMode,
        self::SQUARE_QianchuanAdCreateV10MultiProductCreativeListProgrammaticCreativeProgrammaticCreativeMediaListImageMode,
        self::UNION_SPLASH_QianchuanAdCreateV10MultiProductCreativeListProgrammaticCreativeProgrammaticCreativeMediaListImageMode,
        self::VIDEO_LARGE_QianchuanAdCreateV10MultiProductCreativeListProgrammaticCreativeProgrammaticCreativeMediaListImageMode,
        self::VIDEO_VERTICAL_QianchuanAdCreateV10MultiProductCreativeListProgrammaticCreativeProgrammaticCreativeMediaListImageMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdCreateV10MultiProductCreativeListProgrammaticCreativeProgrammaticCreativeMediaListImageMode', $value));
        }
        return (string) $value;
    }
}
