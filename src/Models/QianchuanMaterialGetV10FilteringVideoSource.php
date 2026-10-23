<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanMaterialGetV10FilteringVideoSource
{
    public const ARTHUR_QianchuanMaterialGetV10FilteringVideoSource = 'ARTHUR';
    public const AWEME_QianchuanMaterialGetV10FilteringVideoSource = 'AWEME';
    public const BP_QianchuanMaterialGetV10FilteringVideoSource = 'BP';
    public const CREATIVE_CENTER_QianchuanMaterialGetV10FilteringVideoSource = 'CREATIVE_CENTER';
    public const E_COMMERCE_QianchuanMaterialGetV10FilteringVideoSource = 'E_COMMERCE';
    public const JIANYING_QianchuanMaterialGetV10FilteringVideoSource = 'JIANYING';
    public const JI_CHUANG_QianchuanMaterialGetV10FilteringVideoSource = 'JI_CHUANG';
    public const LIVE_HIGHLIGHT_QianchuanMaterialGetV10FilteringVideoSource = 'LIVE_HIGHLIGHT';
    public const QUNFENG_QianchuanMaterialGetV10FilteringVideoSource = 'QUNFENG';
    public const STAR_QianchuanMaterialGetV10FilteringVideoSource = 'STAR';
    public const TADA_QianchuanMaterialGetV10FilteringVideoSource = 'TADA';
    public const VIDEO_CAPTURE_QianchuanMaterialGetV10FilteringVideoSource = 'VIDEO_CAPTURE';

    public const ALLOWED_VALUES = [
        self::ARTHUR_QianchuanMaterialGetV10FilteringVideoSource,
        self::AWEME_QianchuanMaterialGetV10FilteringVideoSource,
        self::BP_QianchuanMaterialGetV10FilteringVideoSource,
        self::CREATIVE_CENTER_QianchuanMaterialGetV10FilteringVideoSource,
        self::E_COMMERCE_QianchuanMaterialGetV10FilteringVideoSource,
        self::JIANYING_QianchuanMaterialGetV10FilteringVideoSource,
        self::JI_CHUANG_QianchuanMaterialGetV10FilteringVideoSource,
        self::LIVE_HIGHLIGHT_QianchuanMaterialGetV10FilteringVideoSource,
        self::QUNFENG_QianchuanMaterialGetV10FilteringVideoSource,
        self::STAR_QianchuanMaterialGetV10FilteringVideoSource,
        self::TADA_QianchuanMaterialGetV10FilteringVideoSource,
        self::VIDEO_CAPTURE_QianchuanMaterialGetV10FilteringVideoSource,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanMaterialGetV10FilteringVideoSource', $value));
        }
        return (string) $value;
    }
}
