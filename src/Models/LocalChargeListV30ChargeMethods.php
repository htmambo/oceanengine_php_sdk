<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalChargeListV30ChargeMethods
{
    public const ONLINE_CHARGE_LocalChargeListV30ChargeMethods = 'ONLINE_CHARGE';
    public const CORPORATE_REMITTANCE_LocalChargeListV30ChargeMethods = 'CORPORATE_REMITTANCE';
    public const ORDER_PAY_LocalChargeListV30ChargeMethods = 'ORDER_PAY';
    public const COMMISSION_LocalChargeListV30ChargeMethods = 'COMMISSION';
    public const DIRECT_CHARGE_LocalChargeListV30ChargeMethods = 'DIRECT_CHARGE';
    public const GOODS_TRANSFER_LocalChargeListV30ChargeMethods = 'GOODS_TRANSFER';

    public const ALLOWED_VALUES = [
        self::ONLINE_CHARGE_LocalChargeListV30ChargeMethods,
        self::CORPORATE_REMITTANCE_LocalChargeListV30ChargeMethods,
        self::ORDER_PAY_LocalChargeListV30ChargeMethods,
        self::COMMISSION_LocalChargeListV30ChargeMethods,
        self::DIRECT_CHARGE_LocalChargeListV30ChargeMethods,
        self::GOODS_TRANSFER_LocalChargeListV30ChargeMethods,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalChargeListV30ChargeMethods', $value));
        }
        return (string) $value;
    }
}
