<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanReportMaterialGetV10FilteringMaterialMode
{
    public const LARGE_QianchuanReportMaterialGetV10FilteringMaterialMode = 'LARGE';
    public const LARGE_VERTICAL_QianchuanReportMaterialGetV10FilteringMaterialMode = 'LARGE_VERTICAL';
    public const SMALL_QianchuanReportMaterialGetV10FilteringMaterialMode = 'SMALL';
    public const SQUARE_QianchuanReportMaterialGetV10FilteringMaterialMode = 'SQUARE';
    public const VIDEO_LARGE_QianchuanReportMaterialGetV10FilteringMaterialMode = 'VIDEO_LARGE';
    public const VIDEO_VERTICAL_QianchuanReportMaterialGetV10FilteringMaterialMode = 'VIDEO_VERTICAL';

    public const ALLOWED_VALUES = [
        self::LARGE_QianchuanReportMaterialGetV10FilteringMaterialMode,
        self::LARGE_VERTICAL_QianchuanReportMaterialGetV10FilteringMaterialMode,
        self::SMALL_QianchuanReportMaterialGetV10FilteringMaterialMode,
        self::SQUARE_QianchuanReportMaterialGetV10FilteringMaterialMode,
        self::VIDEO_LARGE_QianchuanReportMaterialGetV10FilteringMaterialMode,
        self::VIDEO_VERTICAL_QianchuanReportMaterialGetV10FilteringMaterialMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanReportMaterialGetV10FilteringMaterialMode', $value));
        }
        return (string) $value;
    }
}
