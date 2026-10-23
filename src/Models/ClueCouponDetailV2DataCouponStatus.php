<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ClueCouponDetailV2DataCouponStatus
{
    public const PAUSE_ClueCouponDetailV2DataCouponStatus = 'PAUSE';
    public const UNAUDITED_ClueCouponDetailV2DataCouponStatus = 'UNAUDITED';
    public const AUDIT_DOING_ClueCouponDetailV2DataCouponStatus = 'AUDIT_DOING';
    public const NORMAL_ClueCouponDetailV2DataCouponStatus = 'NORMAL';
    public const OFFLINE_ClueCouponDetailV2DataCouponStatus = 'OFFLINE';
    public const DELETED_ClueCouponDetailV2DataCouponStatus = 'DELETED';
    public const AUDIT_FAIL_ClueCouponDetailV2DataCouponStatus = 'AUDIT_FAIL';

    public const ALLOWED_VALUES = [
        self::PAUSE_ClueCouponDetailV2DataCouponStatus,
        self::UNAUDITED_ClueCouponDetailV2DataCouponStatus,
        self::AUDIT_DOING_ClueCouponDetailV2DataCouponStatus,
        self::NORMAL_ClueCouponDetailV2DataCouponStatus,
        self::OFFLINE_ClueCouponDetailV2DataCouponStatus,
        self::DELETED_ClueCouponDetailV2DataCouponStatus,
        self::AUDIT_FAIL_ClueCouponDetailV2DataCouponStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ClueCouponDetailV2DataCouponStatus', $value));
        }
        return (string) $value;
    }
}
