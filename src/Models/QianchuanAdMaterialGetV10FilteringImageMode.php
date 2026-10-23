<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdMaterialGetV10FilteringImageMode
{
    public const CAROUSEL_QianchuanAdMaterialGetV10FilteringImageMode = 'CAROUSEL';
    public const LARGE_QianchuanAdMaterialGetV10FilteringImageMode = 'LARGE';
    public const LARGE_VERTICAL_QianchuanAdMaterialGetV10FilteringImageMode = 'LARGE_VERTICAL';
    public const SMALL_QianchuanAdMaterialGetV10FilteringImageMode = 'SMALL';
    public const VIDEO_LARGE_QianchuanAdMaterialGetV10FilteringImageMode = 'VIDEO_LARGE';
    public const VIDEO_VERTICAL_QianchuanAdMaterialGetV10FilteringImageMode = 'VIDEO_VERTICAL';

    public const ALLOWED_VALUES = [
        self::CAROUSEL_QianchuanAdMaterialGetV10FilteringImageMode,
        self::LARGE_QianchuanAdMaterialGetV10FilteringImageMode,
        self::LARGE_VERTICAL_QianchuanAdMaterialGetV10FilteringImageMode,
        self::SMALL_QianchuanAdMaterialGetV10FilteringImageMode,
        self::VIDEO_LARGE_QianchuanAdMaterialGetV10FilteringImageMode,
        self::VIDEO_VERTICAL_QianchuanAdMaterialGetV10FilteringImageMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdMaterialGetV10FilteringImageMode', $value));
        }
        return (string) $value;
    }
}
