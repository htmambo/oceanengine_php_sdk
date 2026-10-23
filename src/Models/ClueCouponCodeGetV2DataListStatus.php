<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ClueCouponCodeGetV2DataListStatus
{
    public const VALID_ClueCouponCodeGetV2DataListStatus = 'VALID';
    public const ABANDONED_ClueCouponCodeGetV2DataListStatus = 'ABANDONED';
    public const INVALID_ClueCouponCodeGetV2DataListStatus = 'INVALID';
    public const EXPIRED_ClueCouponCodeGetV2DataListStatus = 'EXPIRED';
    public const USED_ClueCouponCodeGetV2DataListStatus = 'USED';

    public const ALLOWED_VALUES = [
        self::VALID_ClueCouponCodeGetV2DataListStatus,
        self::ABANDONED_ClueCouponCodeGetV2DataListStatus,
        self::INVALID_ClueCouponCodeGetV2DataListStatus,
        self::EXPIRED_ClueCouponCodeGetV2DataListStatus,
        self::USED_ClueCouponCodeGetV2DataListStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ClueCouponCodeGetV2DataListStatus', $value));
        }
        return (string) $value;
    }
}
