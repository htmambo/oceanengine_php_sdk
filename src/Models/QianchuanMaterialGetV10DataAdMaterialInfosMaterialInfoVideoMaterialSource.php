<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource
{
    public const AGENT_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource = 'AGENT';
    public const AI_GENERATE_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource = 'AI_GENERATE';
    public const ARTHUR_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource = 'ARTHUR';
    public const AUTO_GENERATE_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource = 'AUTO_GENERATE';
    public const AWEME_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource = 'AWEME';
    public const BP_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource = 'BP';
    public const CREATIVE_CENTER_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource = 'CREATIVE_CENTER';
    public const E_COMMERCE_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource = 'E_COMMERCE';
    public const JIANYING_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource = 'JIANYING';
    public const JI_CHUANG_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource = 'JI_CHUANG';
    public const LIVE_HIGHLIGHT_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource = 'LIVE_HIGHLIGHT';
    public const QUNFENG_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource = 'QUNFENG';
    public const SQUARE_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource = 'SQUARE';
    public const STAR_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource = 'STAR';
    public const TADA_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource = 'TADA';
    public const VIDEO_CAPTURE_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource = 'VIDEO_CAPTURE';

    public const ALLOWED_VALUES = [
        self::AGENT_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource,
        self::AI_GENERATE_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource,
        self::ARTHUR_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource,
        self::AUTO_GENERATE_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource,
        self::AWEME_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource,
        self::BP_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource,
        self::CREATIVE_CENTER_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource,
        self::E_COMMERCE_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource,
        self::JIANYING_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource,
        self::JI_CHUANG_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource,
        self::LIVE_HIGHLIGHT_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource,
        self::QUNFENG_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource,
        self::SQUARE_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource,
        self::STAR_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource,
        self::TADA_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource,
        self::VIDEO_CAPTURE_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource', $value));
        }
        return (string) $value;
    }
}
