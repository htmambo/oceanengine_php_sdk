<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportRubeexGetV2FilteringAppCode
{
    public const Enum_2_ReportRubeexGetV2FilteringAppCode = 2;
    public const Enum_3_ReportRubeexGetV2FilteringAppCode = 3;
    public const Enum_4_ReportRubeexGetV2FilteringAppCode = 4;
    public const Enum_8_ReportRubeexGetV2FilteringAppCode = 8;
    public const Enum_9_ReportRubeexGetV2FilteringAppCode = 9;
    public const Enum_14_ReportRubeexGetV2FilteringAppCode = 14;
    public const Enum_28_ReportRubeexGetV2FilteringAppCode = 28;

    public const ALLOWED_VALUES = [
        self::Enum_2_ReportRubeexGetV2FilteringAppCode,
        self::Enum_3_ReportRubeexGetV2FilteringAppCode,
        self::Enum_4_ReportRubeexGetV2FilteringAppCode,
        self::Enum_8_ReportRubeexGetV2FilteringAppCode,
        self::Enum_9_ReportRubeexGetV2FilteringAppCode,
        self::Enum_14_ReportRubeexGetV2FilteringAppCode,
        self::Enum_28_ReportRubeexGetV2FilteringAppCode,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportRubeexGetV2FilteringAppCode', $value));
        }
        return (string) $value;
    }
}
