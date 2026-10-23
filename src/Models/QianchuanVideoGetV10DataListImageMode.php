<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanVideoGetV10DataListImageMode
{
    public const LARGE_QianchuanVideoGetV10DataListImageMode = 'LARGE';
    public const LARGE_VERTICAL_QianchuanVideoGetV10DataListImageMode = 'LARGE_VERTICAL';
    public const SMALL_QianchuanVideoGetV10DataListImageMode = 'SMALL';
    public const UNION_SPLASH_QianchuanVideoGetV10DataListImageMode = 'UNION_SPLASH';
    public const VIDEO_LARGE_QianchuanVideoGetV10DataListImageMode = 'VIDEO_LARGE';
    public const VIDEO_VERTICAL_QianchuanVideoGetV10DataListImageMode = 'VIDEO_VERTICAL';

    public const ALLOWED_VALUES = [
        self::LARGE_QianchuanVideoGetV10DataListImageMode,
        self::LARGE_VERTICAL_QianchuanVideoGetV10DataListImageMode,
        self::SMALL_QianchuanVideoGetV10DataListImageMode,
        self::UNION_SPLASH_QianchuanVideoGetV10DataListImageMode,
        self::VIDEO_LARGE_QianchuanVideoGetV10DataListImageMode,
        self::VIDEO_VERTICAL_QianchuanVideoGetV10DataListImageMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanVideoGetV10DataListImageMode', $value));
        }
        return (string) $value;
    }
}
