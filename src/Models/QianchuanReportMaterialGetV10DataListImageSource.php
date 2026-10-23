<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanReportMaterialGetV10DataListImageSource
{
    public const CREATIVE_CENTER_QianchuanReportMaterialGetV10DataListImageSource = 'CREATIVE_CENTER';
    public const E_COMMERCE_QianchuanReportMaterialGetV10DataListImageSource = 'E_COMMERCE';
    public const JI_CHUANG_QianchuanReportMaterialGetV10DataListImageSource = 'JI_CHUANG';
    public const SQUARE_QianchuanReportMaterialGetV10DataListImageSource = 'SQUARE';

    public const ALLOWED_VALUES = [
        self::CREATIVE_CENTER_QianchuanReportMaterialGetV10DataListImageSource,
        self::E_COMMERCE_QianchuanReportMaterialGetV10DataListImageSource,
        self::JI_CHUANG_QianchuanReportMaterialGetV10DataListImageSource,
        self::SQUARE_QianchuanReportMaterialGetV10DataListImageSource,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanReportMaterialGetV10DataListImageSource', $value));
        }
        return (string) $value;
    }
}
