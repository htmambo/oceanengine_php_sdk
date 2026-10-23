<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdDetailGetV10DataMultiProductCreativeListProgrammaticCreativeProgrammaticCreativeMediaListImageMode
{
    public const AWEME_LIVE_ROOM_QianchuanAdDetailGetV10DataMultiProductCreativeListProgrammaticCreativeProgrammaticCreativeMediaListImageMode = 'AWEME_LIVE_ROOM';
    public const CAROUSEL_QianchuanAdDetailGetV10DataMultiProductCreativeListProgrammaticCreativeProgrammaticCreativeMediaListImageMode = 'CAROUSEL';
    public const LARGE_QianchuanAdDetailGetV10DataMultiProductCreativeListProgrammaticCreativeProgrammaticCreativeMediaListImageMode = 'LARGE';
    public const LARGE_VERTICAL_QianchuanAdDetailGetV10DataMultiProductCreativeListProgrammaticCreativeProgrammaticCreativeMediaListImageMode = 'LARGE_VERTICAL';
    public const SMALL_QianchuanAdDetailGetV10DataMultiProductCreativeListProgrammaticCreativeProgrammaticCreativeMediaListImageMode = 'SMALL';
    public const SQUARE_QianchuanAdDetailGetV10DataMultiProductCreativeListProgrammaticCreativeProgrammaticCreativeMediaListImageMode = 'SQUARE';
    public const UNION_SPLASH_QianchuanAdDetailGetV10DataMultiProductCreativeListProgrammaticCreativeProgrammaticCreativeMediaListImageMode = 'UNION_SPLASH';
    public const VIDEO_LARGE_QianchuanAdDetailGetV10DataMultiProductCreativeListProgrammaticCreativeProgrammaticCreativeMediaListImageMode = 'VIDEO_LARGE';
    public const VIDEO_VERTICAL_QianchuanAdDetailGetV10DataMultiProductCreativeListProgrammaticCreativeProgrammaticCreativeMediaListImageMode = 'VIDEO_VERTICAL';

    public const ALLOWED_VALUES = [
        self::AWEME_LIVE_ROOM_QianchuanAdDetailGetV10DataMultiProductCreativeListProgrammaticCreativeProgrammaticCreativeMediaListImageMode,
        self::CAROUSEL_QianchuanAdDetailGetV10DataMultiProductCreativeListProgrammaticCreativeProgrammaticCreativeMediaListImageMode,
        self::LARGE_QianchuanAdDetailGetV10DataMultiProductCreativeListProgrammaticCreativeProgrammaticCreativeMediaListImageMode,
        self::LARGE_VERTICAL_QianchuanAdDetailGetV10DataMultiProductCreativeListProgrammaticCreativeProgrammaticCreativeMediaListImageMode,
        self::SMALL_QianchuanAdDetailGetV10DataMultiProductCreativeListProgrammaticCreativeProgrammaticCreativeMediaListImageMode,
        self::SQUARE_QianchuanAdDetailGetV10DataMultiProductCreativeListProgrammaticCreativeProgrammaticCreativeMediaListImageMode,
        self::UNION_SPLASH_QianchuanAdDetailGetV10DataMultiProductCreativeListProgrammaticCreativeProgrammaticCreativeMediaListImageMode,
        self::VIDEO_LARGE_QianchuanAdDetailGetV10DataMultiProductCreativeListProgrammaticCreativeProgrammaticCreativeMediaListImageMode,
        self::VIDEO_VERTICAL_QianchuanAdDetailGetV10DataMultiProductCreativeListProgrammaticCreativeProgrammaticCreativeMediaListImageMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdDetailGetV10DataMultiProductCreativeListProgrammaticCreativeProgrammaticCreativeMediaListImageMode', $value));
        }
        return (string) $value;
    }
}
