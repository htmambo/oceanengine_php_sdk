<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class WalletChargeVerifyGetV30ChargeType
{
    public const CREDIT_WalletChargeVerifyGetV30ChargeType = 'CREDIT';
    public const GRANT_WalletChargeVerifyGetV30ChargeType = 'GRANT';
    public const PRELOAN_WalletChargeVerifyGetV30ChargeType = 'PRELOAN';
    public const PREPAY_WalletChargeVerifyGetV30ChargeType = 'PREPAY';
    public const REBATE_WalletChargeVerifyGetV30ChargeType = 'REBATE';

    public const ALLOWED_VALUES = [
        self::CREDIT_WalletChargeVerifyGetV30ChargeType,
        self::GRANT_WalletChargeVerifyGetV30ChargeType,
        self::PRELOAN_WalletChargeVerifyGetV30ChargeType,
        self::PREPAY_WalletChargeVerifyGetV30ChargeType,
        self::REBATE_WalletChargeVerifyGetV30ChargeType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum WalletChargeVerifyGetV30ChargeType', $value));
        }
        return (string) $value;
    }
}
