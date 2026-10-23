<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanReportMaterialGetV10DataListVideoSource
{
    public const ARTHUR_QianchuanReportMaterialGetV10DataListVideoSource = 'ARTHUR';
    public const AWEME_QianchuanReportMaterialGetV10DataListVideoSource = 'AWEME';
    public const BP_QianchuanReportMaterialGetV10DataListVideoSource = 'BP';
    public const CREATIVE_CENTER_QianchuanReportMaterialGetV10DataListVideoSource = 'CREATIVE_CENTER';
    public const E_COMMERCE_QianchuanReportMaterialGetV10DataListVideoSource = 'E_COMMERCE';
    public const JI_CHUANG_QianchuanReportMaterialGetV10DataListVideoSource = 'JI_CHUANG';
    public const LIVE_HIGHLIGHT_QianchuanReportMaterialGetV10DataListVideoSource = 'LIVE_HIGHLIGHT';
    public const QUNFENG_QianchuanReportMaterialGetV10DataListVideoSource = 'QUNFENG';
    public const STAR_QianchuanReportMaterialGetV10DataListVideoSource = 'STAR';
    public const TADA_QianchuanReportMaterialGetV10DataListVideoSource = 'TADA';
    public const VIDEO_CAPTURE_QianchuanReportMaterialGetV10DataListVideoSource = 'VIDEO_CAPTURE';

    public const ALLOWED_VALUES = [
        self::ARTHUR_QianchuanReportMaterialGetV10DataListVideoSource,
        self::AWEME_QianchuanReportMaterialGetV10DataListVideoSource,
        self::BP_QianchuanReportMaterialGetV10DataListVideoSource,
        self::CREATIVE_CENTER_QianchuanReportMaterialGetV10DataListVideoSource,
        self::E_COMMERCE_QianchuanReportMaterialGetV10DataListVideoSource,
        self::JI_CHUANG_QianchuanReportMaterialGetV10DataListVideoSource,
        self::LIVE_HIGHLIGHT_QianchuanReportMaterialGetV10DataListVideoSource,
        self::QUNFENG_QianchuanReportMaterialGetV10DataListVideoSource,
        self::STAR_QianchuanReportMaterialGetV10DataListVideoSource,
        self::TADA_QianchuanReportMaterialGetV10DataListVideoSource,
        self::VIDEO_CAPTURE_QianchuanReportMaterialGetV10DataListVideoSource,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanReportMaterialGetV10DataListVideoSource', $value));
        }
        return (string) $value;
    }
}
