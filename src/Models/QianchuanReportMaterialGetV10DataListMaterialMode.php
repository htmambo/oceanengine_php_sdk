<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanReportMaterialGetV10DataListMaterialMode
{
    public const LARGE_QianchuanReportMaterialGetV10DataListMaterialMode = 'LARGE';
    public const LARGE_VERTICAL_QianchuanReportMaterialGetV10DataListMaterialMode = 'LARGE_VERTICAL';
    public const SMALL_QianchuanReportMaterialGetV10DataListMaterialMode = 'SMALL';
    public const SQUARE_QianchuanReportMaterialGetV10DataListMaterialMode = 'SQUARE';
    public const UNION_SPLASH_QianchuanReportMaterialGetV10DataListMaterialMode = 'UNION_SPLASH';
    public const VIDEO_LARGE_QianchuanReportMaterialGetV10DataListMaterialMode = 'VIDEO_LARGE';
    public const VIDEO_VERTICAL_QianchuanReportMaterialGetV10DataListMaterialMode = 'VIDEO_VERTICAL';

    public const ALLOWED_VALUES = [
        self::LARGE_QianchuanReportMaterialGetV10DataListMaterialMode,
        self::LARGE_VERTICAL_QianchuanReportMaterialGetV10DataListMaterialMode,
        self::SMALL_QianchuanReportMaterialGetV10DataListMaterialMode,
        self::SQUARE_QianchuanReportMaterialGetV10DataListMaterialMode,
        self::UNION_SPLASH_QianchuanReportMaterialGetV10DataListMaterialMode,
        self::VIDEO_LARGE_QianchuanReportMaterialGetV10DataListMaterialMode,
        self::VIDEO_VERTICAL_QianchuanReportMaterialGetV10DataListMaterialMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanReportMaterialGetV10DataListMaterialMode', $value));
        }
        return (string) $value;
    }
}
