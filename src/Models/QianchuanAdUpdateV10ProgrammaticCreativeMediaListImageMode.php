<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdUpdateV10ProgrammaticCreativeMediaListImageMode
{
    public const AWEME_LIVE_ROOM_QianchuanAdUpdateV10ProgrammaticCreativeMediaListImageMode = 'AWEME_LIVE_ROOM';
    public const CAROUSEL_QianchuanAdUpdateV10ProgrammaticCreativeMediaListImageMode = 'CAROUSEL';
    public const LARGE_QianchuanAdUpdateV10ProgrammaticCreativeMediaListImageMode = 'LARGE';
    public const LARGE_VERTICAL_QianchuanAdUpdateV10ProgrammaticCreativeMediaListImageMode = 'LARGE_VERTICAL';
    public const SMALL_QianchuanAdUpdateV10ProgrammaticCreativeMediaListImageMode = 'SMALL';
    public const SQUARE_QianchuanAdUpdateV10ProgrammaticCreativeMediaListImageMode = 'SQUARE';
    public const UNION_SPLASH_QianchuanAdUpdateV10ProgrammaticCreativeMediaListImageMode = 'UNION_SPLASH';
    public const VIDEO_LARGE_QianchuanAdUpdateV10ProgrammaticCreativeMediaListImageMode = 'VIDEO_LARGE';
    public const VIDEO_VERTICAL_QianchuanAdUpdateV10ProgrammaticCreativeMediaListImageMode = 'VIDEO_VERTICAL';

    public const ALLOWED_VALUES = [
        self::AWEME_LIVE_ROOM_QianchuanAdUpdateV10ProgrammaticCreativeMediaListImageMode,
        self::CAROUSEL_QianchuanAdUpdateV10ProgrammaticCreativeMediaListImageMode,
        self::LARGE_QianchuanAdUpdateV10ProgrammaticCreativeMediaListImageMode,
        self::LARGE_VERTICAL_QianchuanAdUpdateV10ProgrammaticCreativeMediaListImageMode,
        self::SMALL_QianchuanAdUpdateV10ProgrammaticCreativeMediaListImageMode,
        self::SQUARE_QianchuanAdUpdateV10ProgrammaticCreativeMediaListImageMode,
        self::UNION_SPLASH_QianchuanAdUpdateV10ProgrammaticCreativeMediaListImageMode,
        self::VIDEO_LARGE_QianchuanAdUpdateV10ProgrammaticCreativeMediaListImageMode,
        self::VIDEO_VERTICAL_QianchuanAdUpdateV10ProgrammaticCreativeMediaListImageMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdUpdateV10ProgrammaticCreativeMediaListImageMode', $value));
        }
        return (string) $value;
    }
}
