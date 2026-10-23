<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource
{
    public const AGENT_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource = 'AGENT';
    public const AI_GENERATE_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource = 'AI_GENERATE';
    public const ARTHUR_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource = 'ARTHUR';
    public const AUTO_GENERATE_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource = 'AUTO_GENERATE';
    public const AWEME_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource = 'AWEME';
    public const BP_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource = 'BP';
    public const CREATIVE_CENTER_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource = 'CREATIVE_CENTER';
    public const E_COMMERCE_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource = 'E_COMMERCE';
    public const JIANYING_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource = 'JIANYING';
    public const JI_CHUANG_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource = 'JI_CHUANG';
    public const LIVE_HIGHLIGHT_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource = 'LIVE_HIGHLIGHT';
    public const QUNFENG_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource = 'QUNFENG';
    public const SQUARE_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource = 'SQUARE';
    public const STAR_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource = 'STAR';
    public const TADA_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource = 'TADA';
    public const VIDEO_CAPTURE_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource = 'VIDEO_CAPTURE';

    public const ALLOWED_VALUES = [
        self::AGENT_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource,
        self::AI_GENERATE_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource,
        self::ARTHUR_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource,
        self::AUTO_GENERATE_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource,
        self::AWEME_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource,
        self::BP_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource,
        self::CREATIVE_CENTER_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource,
        self::E_COMMERCE_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource,
        self::JIANYING_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource,
        self::JI_CHUANG_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource,
        self::LIVE_HIGHLIGHT_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource,
        self::QUNFENG_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource,
        self::SQUARE_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource,
        self::STAR_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource,
        self::TADA_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource,
        self::VIDEO_CAPTURE_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource', $value));
        }
        return (string) $value;
    }
}
