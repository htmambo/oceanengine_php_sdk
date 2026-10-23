<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource
{
    public const AGENT_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource = 'AGENT';
    public const AI_GENERATE_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource = 'AI_GENERATE';
    public const ARTHUR_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource = 'ARTHUR';
    public const AUTO_GENERATE_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource = 'AUTO_GENERATE';
    public const AWEME_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource = 'AWEME';
    public const BP_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource = 'BP';
    public const CREATIVE_CENTER_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource = 'CREATIVE_CENTER';
    public const E_COMMERCE_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource = 'E_COMMERCE';
    public const JIANYING_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource = 'JIANYING';
    public const JI_CHUANG_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource = 'JI_CHUANG';
    public const LIVE_HIGHLIGHT_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource = 'LIVE_HIGHLIGHT';
    public const QUNFENG_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource = 'QUNFENG';
    public const SQUARE_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource = 'SQUARE';
    public const STAR_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource = 'STAR';
    public const TADA_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource = 'TADA';
    public const VIDEO_CAPTURE_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource = 'VIDEO_CAPTURE';

    public const ALLOWED_VALUES = [
        self::AGENT_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource,
        self::AI_GENERATE_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource,
        self::ARTHUR_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource,
        self::AUTO_GENERATE_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource,
        self::AWEME_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource,
        self::BP_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource,
        self::CREATIVE_CENTER_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource,
        self::E_COMMERCE_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource,
        self::JIANYING_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource,
        self::JI_CHUANG_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource,
        self::LIVE_HIGHLIGHT_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource,
        self::QUNFENG_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource,
        self::SQUARE_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource,
        self::STAR_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource,
        self::TADA_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource,
        self::VIDEO_CAPTURE_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource', $value));
        }
        return (string) $value;
    }
}
