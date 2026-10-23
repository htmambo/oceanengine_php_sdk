<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ChargeVerifyGetV30ChargeSource
{
    public const AUTO_CHARGE_ChargeVerifyGetV30ChargeSource = 'AUTO_CHARGE';
    public const CREDIT_CHARGE_ChargeVerifyGetV30ChargeSource = 'CREDIT_CHARGE';
    public const DAREN_COMMISSION_ChargeVerifyGetV30ChargeSource = 'DAREN_COMMISSION';
    public const GOODS_TRANSFER_ChargeVerifyGetV30ChargeSource = 'GOODS_TRANSFER';
    public const MOBILE_CHARGE_ChargeVerifyGetV30ChargeSource = 'MOBILE_CHARGE';
    public const ONLINE_CHARGE_ChargeVerifyGetV30ChargeSource = 'ONLINE_CHARGE';

    public const ALLOWED_VALUES = [
        self::AUTO_CHARGE_ChargeVerifyGetV30ChargeSource,
        self::CREDIT_CHARGE_ChargeVerifyGetV30ChargeSource,
        self::DAREN_COMMISSION_ChargeVerifyGetV30ChargeSource,
        self::GOODS_TRANSFER_ChargeVerifyGetV30ChargeSource,
        self::MOBILE_CHARGE_ChargeVerifyGetV30ChargeSource,
        self::ONLINE_CHARGE_ChargeVerifyGetV30ChargeSource,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ChargeVerifyGetV30ChargeSource', $value));
        }
        return (string) $value;
    }
}
