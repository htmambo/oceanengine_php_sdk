<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanImageGetV10DataListImageMode
{
    public const LARGE_QianchuanImageGetV10DataListImageMode = 'LARGE';
    public const LARGE_VERTICAL_QianchuanImageGetV10DataListImageMode = 'LARGE_VERTICAL';
    public const SMALL_QianchuanImageGetV10DataListImageMode = 'SMALL';
    public const SQUARE_QianchuanImageGetV10DataListImageMode = 'SQUARE';
    public const UNION_SPLASH_QianchuanImageGetV10DataListImageMode = 'UNION_SPLASH';
    public const VIDEO_LARGE_QianchuanImageGetV10DataListImageMode = 'VIDEO_LARGE';
    public const VIDEO_VERTICAL_QianchuanImageGetV10DataListImageMode = 'VIDEO_VERTICAL';

    public const ALLOWED_VALUES = [
        self::LARGE_QianchuanImageGetV10DataListImageMode,
        self::LARGE_VERTICAL_QianchuanImageGetV10DataListImageMode,
        self::SMALL_QianchuanImageGetV10DataListImageMode,
        self::SQUARE_QianchuanImageGetV10DataListImageMode,
        self::UNION_SPLASH_QianchuanImageGetV10DataListImageMode,
        self::VIDEO_LARGE_QianchuanImageGetV10DataListImageMode,
        self::VIDEO_VERTICAL_QianchuanImageGetV10DataListImageMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanImageGetV10DataListImageMode', $value));
        }
        return (string) $value;
    }
}
