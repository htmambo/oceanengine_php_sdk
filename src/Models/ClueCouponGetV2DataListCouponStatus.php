<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ClueCouponGetV2DataListCouponStatus
{
    public const PAUSE_ClueCouponGetV2DataListCouponStatus = 'PAUSE';
    public const UNAUDITED_ClueCouponGetV2DataListCouponStatus = 'UNAUDITED';
    public const AUDIT_DOING_ClueCouponGetV2DataListCouponStatus = 'AUDIT_DOING';
    public const NORMAL_ClueCouponGetV2DataListCouponStatus = 'NORMAL';
    public const OFFLINE_ClueCouponGetV2DataListCouponStatus = 'OFFLINE';
    public const DELETED_ClueCouponGetV2DataListCouponStatus = 'DELETED';
    public const AUDIT_FAIL_ClueCouponGetV2DataListCouponStatus = 'AUDIT_FAIL';

    public const ALLOWED_VALUES = [
        self::PAUSE_ClueCouponGetV2DataListCouponStatus,
        self::UNAUDITED_ClueCouponGetV2DataListCouponStatus,
        self::AUDIT_DOING_ClueCouponGetV2DataListCouponStatus,
        self::NORMAL_ClueCouponGetV2DataListCouponStatus,
        self::OFFLINE_ClueCouponGetV2DataListCouponStatus,
        self::DELETED_ClueCouponGetV2DataListCouponStatus,
        self::AUDIT_FAIL_ClueCouponGetV2DataListCouponStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ClueCouponGetV2DataListCouponStatus', $value));
        }
        return (string) $value;
    }
}
