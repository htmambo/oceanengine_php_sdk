<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanReportMaterialGetV10FilteringVideoSource
{
    public const AGENT_QianchuanReportMaterialGetV10FilteringVideoSource = 'AGENT';
    public const ARTHUR_QianchuanReportMaterialGetV10FilteringVideoSource = 'ARTHUR';
    public const AWEME_QianchuanReportMaterialGetV10FilteringVideoSource = 'AWEME';
    public const BP_QianchuanReportMaterialGetV10FilteringVideoSource = 'BP';
    public const CREATIVE_CENTER_QianchuanReportMaterialGetV10FilteringVideoSource = 'CREATIVE_CENTER';
    public const E_COMMERCE_QianchuanReportMaterialGetV10FilteringVideoSource = 'E_COMMERCE';
    public const JI_CHUANG_QianchuanReportMaterialGetV10FilteringVideoSource = 'JI_CHUANG';
    public const LIVE_HIGHLIGHT_QianchuanReportMaterialGetV10FilteringVideoSource = 'LIVE_HIGHLIGHT';
    public const QUNFENG_QianchuanReportMaterialGetV10FilteringVideoSource = 'QUNFENG';
    public const STAR_QianchuanReportMaterialGetV10FilteringVideoSource = 'STAR';
    public const TADA_QianchuanReportMaterialGetV10FilteringVideoSource = 'TADA';
    public const VIDEO_CAPTURE_QianchuanReportMaterialGetV10FilteringVideoSource = 'VIDEO_CAPTURE';

    public const ALLOWED_VALUES = [
        self::AGENT_QianchuanReportMaterialGetV10FilteringVideoSource,
        self::ARTHUR_QianchuanReportMaterialGetV10FilteringVideoSource,
        self::AWEME_QianchuanReportMaterialGetV10FilteringVideoSource,
        self::BP_QianchuanReportMaterialGetV10FilteringVideoSource,
        self::CREATIVE_CENTER_QianchuanReportMaterialGetV10FilteringVideoSource,
        self::E_COMMERCE_QianchuanReportMaterialGetV10FilteringVideoSource,
        self::JI_CHUANG_QianchuanReportMaterialGetV10FilteringVideoSource,
        self::LIVE_HIGHLIGHT_QianchuanReportMaterialGetV10FilteringVideoSource,
        self::QUNFENG_QianchuanReportMaterialGetV10FilteringVideoSource,
        self::STAR_QianchuanReportMaterialGetV10FilteringVideoSource,
        self::TADA_QianchuanReportMaterialGetV10FilteringVideoSource,
        self::VIDEO_CAPTURE_QianchuanReportMaterialGetV10FilteringVideoSource,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanReportMaterialGetV10FilteringVideoSource', $value));
        }
        return (string) $value;
    }
}
