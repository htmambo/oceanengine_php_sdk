<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource
{
    public const AGENT_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource = 'AGENT';
    public const AI_GENERATE_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource = 'AI_GENERATE';
    public const ARTHUR_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource = 'ARTHUR';
    public const AUTO_GENERATE_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource = 'AUTO_GENERATE';
    public const AWEME_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource = 'AWEME';
    public const BP_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource = 'BP';
    public const CREATIVE_CENTER_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource = 'CREATIVE_CENTER';
    public const E_COMMERCE_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource = 'E_COMMERCE';
    public const JIANYING_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource = 'JIANYING';
    public const JI_CHUANG_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource = 'JI_CHUANG';
    public const LIVE_HIGHLIGHT_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource = 'LIVE_HIGHLIGHT';
    public const QUNFENG_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource = 'QUNFENG';
    public const SQUARE_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource = 'SQUARE';
    public const STAR_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource = 'STAR';
    public const TADA_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource = 'TADA';
    public const VIDEO_CAPTURE_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource = 'VIDEO_CAPTURE';

    public const ALLOWED_VALUES = [
        self::AGENT_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource,
        self::AI_GENERATE_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource,
        self::ARTHUR_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource,
        self::AUTO_GENERATE_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource,
        self::AWEME_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource,
        self::BP_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource,
        self::CREATIVE_CENTER_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource,
        self::E_COMMERCE_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource,
        self::JIANYING_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource,
        self::JI_CHUANG_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource,
        self::LIVE_HIGHLIGHT_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource,
        self::QUNFENG_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource,
        self::SQUARE_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource,
        self::STAR_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource,
        self::TADA_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource,
        self::VIDEO_CAPTURE_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource', $value));
        }
        return (string) $value;
    }
}
