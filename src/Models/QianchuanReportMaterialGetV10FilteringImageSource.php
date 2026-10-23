<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanReportMaterialGetV10FilteringImageSource
{
    public const AI_GENERATE_QianchuanReportMaterialGetV10FilteringImageSource = 'AI_GENERATE';
    public const CREATIVE_CENTER_QianchuanReportMaterialGetV10FilteringImageSource = 'CREATIVE_CENTER';
    public const E_COMMERCE_QianchuanReportMaterialGetV10FilteringImageSource = 'E_COMMERCE';
    public const JI_CHUANG_QianchuanReportMaterialGetV10FilteringImageSource = 'JI_CHUANG';
    public const QUNFENG_QianchuanReportMaterialGetV10FilteringImageSource = 'QUNFENG';
    public const SQUARE_QianchuanReportMaterialGetV10FilteringImageSource = 'SQUARE';

    public const ALLOWED_VALUES = [
        self::AI_GENERATE_QianchuanReportMaterialGetV10FilteringImageSource,
        self::CREATIVE_CENTER_QianchuanReportMaterialGetV10FilteringImageSource,
        self::E_COMMERCE_QianchuanReportMaterialGetV10FilteringImageSource,
        self::JI_CHUANG_QianchuanReportMaterialGetV10FilteringImageSource,
        self::QUNFENG_QianchuanReportMaterialGetV10FilteringImageSource,
        self::SQUARE_QianchuanReportMaterialGetV10FilteringImageSource,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanReportMaterialGetV10FilteringImageSource', $value));
        }
        return (string) $value;
    }
}
