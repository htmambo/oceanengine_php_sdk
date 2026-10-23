<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SvipChargeVerifyGetV30ChargeType
{
    public const CREDIT_SvipChargeVerifyGetV30ChargeType = 'CREDIT';
    public const GRANT_SvipChargeVerifyGetV30ChargeType = 'GRANT';
    public const PRELOAN_SvipChargeVerifyGetV30ChargeType = 'PRELOAN';
    public const PREPAY_SvipChargeVerifyGetV30ChargeType = 'PREPAY';
    public const REBATE_SvipChargeVerifyGetV30ChargeType = 'REBATE';

    public const ALLOWED_VALUES = [
        self::CREDIT_SvipChargeVerifyGetV30ChargeType,
        self::GRANT_SvipChargeVerifyGetV30ChargeType,
        self::PRELOAN_SvipChargeVerifyGetV30ChargeType,
        self::PREPAY_SvipChargeVerifyGetV30ChargeType,
        self::REBATE_SvipChargeVerifyGetV30ChargeType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SvipChargeVerifyGetV30ChargeType', $value));
        }
        return (string) $value;
    }
}
