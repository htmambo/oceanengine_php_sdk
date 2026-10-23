<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DpaEbpProductListV30FilteringAuditStatus
{
    public const Enum_1_DpaEbpProductListV30FilteringAuditStatus = 1;
    public const Enum_2_DpaEbpProductListV30FilteringAuditStatus = 2;
    public const Enum_MINUS_1_DpaEbpProductListV30FilteringAuditStatus = -1;

    public const ALLOWED_VALUES = [
        self::Enum_1_DpaEbpProductListV30FilteringAuditStatus,
        self::Enum_2_DpaEbpProductListV30FilteringAuditStatus,
        self::Enum_MINUS_1_DpaEbpProductListV30FilteringAuditStatus,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DpaEbpProductListV30FilteringAuditStatus', $value));
        }
        return (string) $value;
    }
}
