<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ClueCouponCodeGetV2Status
{
    public const VALID_ClueCouponCodeGetV2Status = 'VALID';
    public const ABANDONED_ClueCouponCodeGetV2Status = 'ABANDONED';
    public const INVALID_ClueCouponCodeGetV2Status = 'INVALID';
    public const EXPIRED_ClueCouponCodeGetV2Status = 'EXPIRED';
    public const USED_ClueCouponCodeGetV2Status = 'USED';

    public const ALLOWED_VALUES = [
        self::VALID_ClueCouponCodeGetV2Status,
        self::ABANDONED_ClueCouponCodeGetV2Status,
        self::INVALID_ClueCouponCodeGetV2Status,
        self::EXPIRED_ClueCouponCodeGetV2Status,
        self::USED_ClueCouponCodeGetV2Status,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ClueCouponCodeGetV2Status', $value));
        }
        return (string) $value;
    }
}
