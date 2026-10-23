<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanVideoGetV10DataListSource
{
    public const AGENT_QianchuanVideoGetV10DataListSource = 'AGENT';
    public const ARTHUR_QianchuanVideoGetV10DataListSource = 'ARTHUR';
    public const AUTO_GENERATE_QianchuanVideoGetV10DataListSource = 'AUTO_GENERATE';
    public const BP_QianchuanVideoGetV10DataListSource = 'BP';
    public const CREATIVE_CENTER_QianchuanVideoGetV10DataListSource = 'CREATIVE_CENTER';
    public const E_COMMERCE_QianchuanVideoGetV10DataListSource = 'E_COMMERCE';
    public const JI_CHUANG_QianchuanVideoGetV10DataListSource = 'JI_CHUANG';
    public const LIVE_HIGHLIGHT_QianchuanVideoGetV10DataListSource = 'LIVE_HIGHLIGHT';
    public const QUNFENG_QianchuanVideoGetV10DataListSource = 'QUNFENG';
    public const STAR_QianchuanVideoGetV10DataListSource = 'STAR';
    public const TADA_QianchuanVideoGetV10DataListSource = 'TADA';
    public const VIDEO_CAPTURE_QianchuanVideoGetV10DataListSource = 'VIDEO_CAPTURE';

    public const ALLOWED_VALUES = [
        self::AGENT_QianchuanVideoGetV10DataListSource,
        self::ARTHUR_QianchuanVideoGetV10DataListSource,
        self::AUTO_GENERATE_QianchuanVideoGetV10DataListSource,
        self::BP_QianchuanVideoGetV10DataListSource,
        self::CREATIVE_CENTER_QianchuanVideoGetV10DataListSource,
        self::E_COMMERCE_QianchuanVideoGetV10DataListSource,
        self::JI_CHUANG_QianchuanVideoGetV10DataListSource,
        self::LIVE_HIGHLIGHT_QianchuanVideoGetV10DataListSource,
        self::QUNFENG_QianchuanVideoGetV10DataListSource,
        self::STAR_QianchuanVideoGetV10DataListSource,
        self::TADA_QianchuanVideoGetV10DataListSource,
        self::VIDEO_CAPTURE_QianchuanVideoGetV10DataListSource,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanVideoGetV10DataListSource', $value));
        }
        return (string) $value;
    }
}
