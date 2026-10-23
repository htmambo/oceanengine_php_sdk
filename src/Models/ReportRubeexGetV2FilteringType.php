<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportRubeexGetV2FilteringType
{
    public const Enum_0_ReportRubeexGetV2FilteringType = 0;
    public const Enum_1_ReportRubeexGetV2FilteringType = 1;

    public const ALLOWED_VALUES = [
        self::Enum_0_ReportRubeexGetV2FilteringType,
        self::Enum_1_ReportRubeexGetV2FilteringType,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportRubeexGetV2FilteringType', $value));
        }
        return (string) $value;
    }
}
