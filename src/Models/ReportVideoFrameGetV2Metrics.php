<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportVideoFrameGetV2Metrics
{
    public const CLICK_CNT_ReportVideoFrameGetV2Metrics = 'click_cnt';
    public const DY_COMMENT_ReportVideoFrameGetV2Metrics = 'dy_comment';
    public const DY_FOLLOW_ReportVideoFrameGetV2Metrics = 'dy_follow';
    public const DY_LIKE_ReportVideoFrameGetV2Metrics = 'dy_like';
    public const USER_LOSE_CNT_ReportVideoFrameGetV2Metrics = 'user_lose_cnt';

    public const ALLOWED_VALUES = [
        self::CLICK_CNT_ReportVideoFrameGetV2Metrics,
        self::DY_COMMENT_ReportVideoFrameGetV2Metrics,
        self::DY_FOLLOW_ReportVideoFrameGetV2Metrics,
        self::DY_LIKE_ReportVideoFrameGetV2Metrics,
        self::USER_LOSE_CNT_ReportVideoFrameGetV2Metrics,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportVideoFrameGetV2Metrics', $value));
        }
        return (string) $value;
    }
}
