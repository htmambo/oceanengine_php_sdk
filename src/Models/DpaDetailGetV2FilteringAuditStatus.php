<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DpaDetailGetV2FilteringAuditStatus
{
    public const Enum_1_DpaDetailGetV2FilteringAuditStatus = 1;
    public const Enum_2_DpaDetailGetV2FilteringAuditStatus = 2;
    public const Enum_MINUS_1_DpaDetailGetV2FilteringAuditStatus = -1;

    public const ALLOWED_VALUES = [
        self::Enum_1_DpaDetailGetV2FilteringAuditStatus,
        self::Enum_2_DpaDetailGetV2FilteringAuditStatus,
        self::Enum_MINUS_1_DpaDetailGetV2FilteringAuditStatus,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DpaDetailGetV2FilteringAuditStatus', $value));
        }
        return (string) $value;
    }
}
