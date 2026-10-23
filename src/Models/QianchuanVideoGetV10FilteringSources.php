<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanVideoGetV10FilteringSources
{
    public const AGENT_QianchuanVideoGetV10FilteringSources = 'AGENT';
    public const ARTHUR_QianchuanVideoGetV10FilteringSources = 'ARTHUR';
    public const BP_QianchuanVideoGetV10FilteringSources = 'BP';
    public const CREATIVE_CENTER_QianchuanVideoGetV10FilteringSources = 'CREATIVE_CENTER';
    public const E_COMMERCE_QianchuanVideoGetV10FilteringSources = 'E_COMMERCE';
    public const JI_CHUANG_QianchuanVideoGetV10FilteringSources = 'JI_CHUANG';
    public const LIVE_HIGHLIGHT_QianchuanVideoGetV10FilteringSources = 'LIVE_HIGHLIGHT';
    public const QUNFENG_QianchuanVideoGetV10FilteringSources = 'QUNFENG';
    public const STAR_QianchuanVideoGetV10FilteringSources = 'STAR';
    public const TADA_QianchuanVideoGetV10FilteringSources = 'TADA';
    public const VIDEO_CAPTURE_QianchuanVideoGetV10FilteringSources = 'VIDEO_CAPTURE';

    public const ALLOWED_VALUES = [
        self::AGENT_QianchuanVideoGetV10FilteringSources,
        self::ARTHUR_QianchuanVideoGetV10FilteringSources,
        self::BP_QianchuanVideoGetV10FilteringSources,
        self::CREATIVE_CENTER_QianchuanVideoGetV10FilteringSources,
        self::E_COMMERCE_QianchuanVideoGetV10FilteringSources,
        self::JI_CHUANG_QianchuanVideoGetV10FilteringSources,
        self::LIVE_HIGHLIGHT_QianchuanVideoGetV10FilteringSources,
        self::QUNFENG_QianchuanVideoGetV10FilteringSources,
        self::STAR_QianchuanVideoGetV10FilteringSources,
        self::TADA_QianchuanVideoGetV10FilteringSources,
        self::VIDEO_CAPTURE_QianchuanVideoGetV10FilteringSources,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanVideoGetV10FilteringSources', $value));
        }
        return (string) $value;
    }
}
