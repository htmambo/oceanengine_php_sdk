<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdMaterialGetV10FilteringVideoSource
{
    public const ARTHUR_QianchuanAdMaterialGetV10FilteringVideoSource = 'ARTHUR';
    public const AWEME_QianchuanAdMaterialGetV10FilteringVideoSource = 'AWEME';
    public const BP_QianchuanAdMaterialGetV10FilteringVideoSource = 'BP';
    public const CREATIVE_CENTER_QianchuanAdMaterialGetV10FilteringVideoSource = 'CREATIVE_CENTER';
    public const E_COMMERCE_QianchuanAdMaterialGetV10FilteringVideoSource = 'E_COMMERCE';
    public const JIANYING_QianchuanAdMaterialGetV10FilteringVideoSource = 'JIANYING';
    public const JI_CHUANG_QianchuanAdMaterialGetV10FilteringVideoSource = 'JI_CHUANG';
    public const LIVE_HIGHLIGHT_QianchuanAdMaterialGetV10FilteringVideoSource = 'LIVE_HIGHLIGHT';
    public const QUNFENG_QianchuanAdMaterialGetV10FilteringVideoSource = 'QUNFENG';
    public const STAR_QianchuanAdMaterialGetV10FilteringVideoSource = 'STAR';
    public const TADA_QianchuanAdMaterialGetV10FilteringVideoSource = 'TADA';
    public const VIDEO_CAPTURE_QianchuanAdMaterialGetV10FilteringVideoSource = 'VIDEO_CAPTURE';

    public const ALLOWED_VALUES = [
        self::ARTHUR_QianchuanAdMaterialGetV10FilteringVideoSource,
        self::AWEME_QianchuanAdMaterialGetV10FilteringVideoSource,
        self::BP_QianchuanAdMaterialGetV10FilteringVideoSource,
        self::CREATIVE_CENTER_QianchuanAdMaterialGetV10FilteringVideoSource,
        self::E_COMMERCE_QianchuanAdMaterialGetV10FilteringVideoSource,
        self::JIANYING_QianchuanAdMaterialGetV10FilteringVideoSource,
        self::JI_CHUANG_QianchuanAdMaterialGetV10FilteringVideoSource,
        self::LIVE_HIGHLIGHT_QianchuanAdMaterialGetV10FilteringVideoSource,
        self::QUNFENG_QianchuanAdMaterialGetV10FilteringVideoSource,
        self::STAR_QianchuanAdMaterialGetV10FilteringVideoSource,
        self::TADA_QianchuanAdMaterialGetV10FilteringVideoSource,
        self::VIDEO_CAPTURE_QianchuanAdMaterialGetV10FilteringVideoSource,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdMaterialGetV10FilteringVideoSource', $value));
        }
        return (string) $value;
    }
}
