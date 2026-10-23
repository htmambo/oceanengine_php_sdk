<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanMaterialGetV10FilteringImageMode
{
    public const CAROUSEL_QianchuanMaterialGetV10FilteringImageMode = 'CAROUSEL';
    public const LARGE_QianchuanMaterialGetV10FilteringImageMode = 'LARGE';
    public const LARGE_VERTICAL_QianchuanMaterialGetV10FilteringImageMode = 'LARGE_VERTICAL';
    public const SMALL_QianchuanMaterialGetV10FilteringImageMode = 'SMALL';
    public const VIDEO_LARGE_QianchuanMaterialGetV10FilteringImageMode = 'VIDEO_LARGE';
    public const VIDEO_VERTICAL_QianchuanMaterialGetV10FilteringImageMode = 'VIDEO_VERTICAL';

    public const ALLOWED_VALUES = [
        self::CAROUSEL_QianchuanMaterialGetV10FilteringImageMode,
        self::LARGE_QianchuanMaterialGetV10FilteringImageMode,
        self::LARGE_VERTICAL_QianchuanMaterialGetV10FilteringImageMode,
        self::SMALL_QianchuanMaterialGetV10FilteringImageMode,
        self::VIDEO_LARGE_QianchuanMaterialGetV10FilteringImageMode,
        self::VIDEO_VERTICAL_QianchuanMaterialGetV10FilteringImageMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanMaterialGetV10FilteringImageMode', $value));
        }
        return (string) $value;
    }
}
