<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ClueCouponUpdateV2Status
{
    public const PAUSE_ClueCouponUpdateV2Status = 'PAUSE';
    public const UNAUDITED_ClueCouponUpdateV2Status = 'UNAUDITED';
    public const AUDIT_DOING_ClueCouponUpdateV2Status = 'AUDIT_DOING';
    public const NORMAL_ClueCouponUpdateV2Status = 'NORMAL';
    public const OFFLINE_ClueCouponUpdateV2Status = 'OFFLINE';
    public const DELETED_ClueCouponUpdateV2Status = 'DELETED';
    public const AUDIT_FAIL_ClueCouponUpdateV2Status = 'AUDIT_FAIL';

    public const ALLOWED_VALUES = [
        self::PAUSE_ClueCouponUpdateV2Status,
        self::UNAUDITED_ClueCouponUpdateV2Status,
        self::AUDIT_DOING_ClueCouponUpdateV2Status,
        self::NORMAL_ClueCouponUpdateV2Status,
        self::OFFLINE_ClueCouponUpdateV2Status,
        self::DELETED_ClueCouponUpdateV2Status,
        self::AUDIT_FAIL_ClueCouponUpdateV2Status,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ClueCouponUpdateV2Status', $value));
        }
        return (string) $value;
    }
}
