<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdDetailGetV10DataProgrammaticCreativeMediaListImageMode
{
    public const AWEME_LIVE_ROOM_QianchuanAdDetailGetV10DataProgrammaticCreativeMediaListImageMode = 'AWEME_LIVE_ROOM';
    public const CAROUSEL_QianchuanAdDetailGetV10DataProgrammaticCreativeMediaListImageMode = 'CAROUSEL';
    public const LARGE_QianchuanAdDetailGetV10DataProgrammaticCreativeMediaListImageMode = 'LARGE';
    public const LARGE_VERTICAL_QianchuanAdDetailGetV10DataProgrammaticCreativeMediaListImageMode = 'LARGE_VERTICAL';
    public const SMALL_QianchuanAdDetailGetV10DataProgrammaticCreativeMediaListImageMode = 'SMALL';
    public const SQUARE_QianchuanAdDetailGetV10DataProgrammaticCreativeMediaListImageMode = 'SQUARE';
    public const UNION_SPLASH_QianchuanAdDetailGetV10DataProgrammaticCreativeMediaListImageMode = 'UNION_SPLASH';
    public const VIDEO_LARGE_QianchuanAdDetailGetV10DataProgrammaticCreativeMediaListImageMode = 'VIDEO_LARGE';
    public const VIDEO_VERTICAL_QianchuanAdDetailGetV10DataProgrammaticCreativeMediaListImageMode = 'VIDEO_VERTICAL';

    public const ALLOWED_VALUES = [
        self::AWEME_LIVE_ROOM_QianchuanAdDetailGetV10DataProgrammaticCreativeMediaListImageMode,
        self::CAROUSEL_QianchuanAdDetailGetV10DataProgrammaticCreativeMediaListImageMode,
        self::LARGE_QianchuanAdDetailGetV10DataProgrammaticCreativeMediaListImageMode,
        self::LARGE_VERTICAL_QianchuanAdDetailGetV10DataProgrammaticCreativeMediaListImageMode,
        self::SMALL_QianchuanAdDetailGetV10DataProgrammaticCreativeMediaListImageMode,
        self::SQUARE_QianchuanAdDetailGetV10DataProgrammaticCreativeMediaListImageMode,
        self::UNION_SPLASH_QianchuanAdDetailGetV10DataProgrammaticCreativeMediaListImageMode,
        self::VIDEO_LARGE_QianchuanAdDetailGetV10DataProgrammaticCreativeMediaListImageMode,
        self::VIDEO_VERTICAL_QianchuanAdDetailGetV10DataProgrammaticCreativeMediaListImageMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdDetailGetV10DataProgrammaticCreativeMediaListImageMode', $value));
        }
        return (string) $value;
    }
}
