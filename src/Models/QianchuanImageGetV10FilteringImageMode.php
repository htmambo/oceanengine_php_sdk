<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanImageGetV10FilteringImageMode
{
    public const LARGE_QianchuanImageGetV10FilteringImageMode = 'LARGE';
    public const LARGE_VERTICAL_QianchuanImageGetV10FilteringImageMode = 'LARGE_VERTICAL';
    public const SMALL_QianchuanImageGetV10FilteringImageMode = 'SMALL';
    public const SQUARE_QianchuanImageGetV10FilteringImageMode = 'SQUARE';
    public const UNION_SPLASH_QianchuanImageGetV10FilteringImageMode = 'UNION_SPLASH';

    public const ALLOWED_VALUES = [
        self::LARGE_QianchuanImageGetV10FilteringImageMode,
        self::LARGE_VERTICAL_QianchuanImageGetV10FilteringImageMode,
        self::SMALL_QianchuanImageGetV10FilteringImageMode,
        self::SQUARE_QianchuanImageGetV10FilteringImageMode,
        self::UNION_SPLASH_QianchuanImageGetV10FilteringImageMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanImageGetV10FilteringImageMode', $value));
        }
        return (string) $value;
    }
}
