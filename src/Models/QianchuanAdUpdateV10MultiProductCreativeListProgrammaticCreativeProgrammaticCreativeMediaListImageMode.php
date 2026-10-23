<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdUpdateV10MultiProductCreativeListProgrammaticCreativeProgrammaticCreativeMediaListImageMode
{
    public const AWEME_LIVE_ROOM_QianchuanAdUpdateV10MultiProductCreativeListProgrammaticCreativeProgrammaticCreativeMediaListImageMode = 'AWEME_LIVE_ROOM';
    public const CAROUSEL_QianchuanAdUpdateV10MultiProductCreativeListProgrammaticCreativeProgrammaticCreativeMediaListImageMode = 'CAROUSEL';
    public const LARGE_QianchuanAdUpdateV10MultiProductCreativeListProgrammaticCreativeProgrammaticCreativeMediaListImageMode = 'LARGE';
    public const LARGE_VERTICAL_QianchuanAdUpdateV10MultiProductCreativeListProgrammaticCreativeProgrammaticCreativeMediaListImageMode = 'LARGE_VERTICAL';
    public const SMALL_QianchuanAdUpdateV10MultiProductCreativeListProgrammaticCreativeProgrammaticCreativeMediaListImageMode = 'SMALL';
    public const SQUARE_QianchuanAdUpdateV10MultiProductCreativeListProgrammaticCreativeProgrammaticCreativeMediaListImageMode = 'SQUARE';
    public const UNION_SPLASH_QianchuanAdUpdateV10MultiProductCreativeListProgrammaticCreativeProgrammaticCreativeMediaListImageMode = 'UNION_SPLASH';
    public const VIDEO_LARGE_QianchuanAdUpdateV10MultiProductCreativeListProgrammaticCreativeProgrammaticCreativeMediaListImageMode = 'VIDEO_LARGE';
    public const VIDEO_VERTICAL_QianchuanAdUpdateV10MultiProductCreativeListProgrammaticCreativeProgrammaticCreativeMediaListImageMode = 'VIDEO_VERTICAL';

    public const ALLOWED_VALUES = [
        self::AWEME_LIVE_ROOM_QianchuanAdUpdateV10MultiProductCreativeListProgrammaticCreativeProgrammaticCreativeMediaListImageMode,
        self::CAROUSEL_QianchuanAdUpdateV10MultiProductCreativeListProgrammaticCreativeProgrammaticCreativeMediaListImageMode,
        self::LARGE_QianchuanAdUpdateV10MultiProductCreativeListProgrammaticCreativeProgrammaticCreativeMediaListImageMode,
        self::LARGE_VERTICAL_QianchuanAdUpdateV10MultiProductCreativeListProgrammaticCreativeProgrammaticCreativeMediaListImageMode,
        self::SMALL_QianchuanAdUpdateV10MultiProductCreativeListProgrammaticCreativeProgrammaticCreativeMediaListImageMode,
        self::SQUARE_QianchuanAdUpdateV10MultiProductCreativeListProgrammaticCreativeProgrammaticCreativeMediaListImageMode,
        self::UNION_SPLASH_QianchuanAdUpdateV10MultiProductCreativeListProgrammaticCreativeProgrammaticCreativeMediaListImageMode,
        self::VIDEO_LARGE_QianchuanAdUpdateV10MultiProductCreativeListProgrammaticCreativeProgrammaticCreativeMediaListImageMode,
        self::VIDEO_VERTICAL_QianchuanAdUpdateV10MultiProductCreativeListProgrammaticCreativeProgrammaticCreativeMediaListImageMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdUpdateV10MultiProductCreativeListProgrammaticCreativeProgrammaticCreativeMediaListImageMode', $value));
        }
        return (string) $value;
    }
}
