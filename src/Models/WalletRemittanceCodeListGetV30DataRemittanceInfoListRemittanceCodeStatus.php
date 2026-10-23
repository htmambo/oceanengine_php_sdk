<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class WalletRemittanceCodeListGetV30DataRemittanceInfoListRemittanceCodeStatus
{
    public const ABANDON_WalletRemittanceCodeListGetV30DataRemittanceInfoListRemittanceCodeStatus = 'ABANDON';
    public const CHARGE_FAILED_WalletRemittanceCodeListGetV30DataRemittanceInfoListRemittanceCodeStatus = 'CHARGE_FAILED';
    public const CHARGE_SUCCESS_WalletRemittanceCodeListGetV30DataRemittanceInfoListRemittanceCodeStatus = 'CHARGE_SUCCESS';
    public const FUNDS_BINDING_WalletRemittanceCodeListGetV30DataRemittanceInfoListRemittanceCodeStatus = 'FUNDS_BINDING';
    public const NOT_USED_WalletRemittanceCodeListGetV30DataRemittanceInfoListRemittanceCodeStatus = 'NOT_USED';

    public const ALLOWED_VALUES = [
        self::ABANDON_WalletRemittanceCodeListGetV30DataRemittanceInfoListRemittanceCodeStatus,
        self::CHARGE_FAILED_WalletRemittanceCodeListGetV30DataRemittanceInfoListRemittanceCodeStatus,
        self::CHARGE_SUCCESS_WalletRemittanceCodeListGetV30DataRemittanceInfoListRemittanceCodeStatus,
        self::FUNDS_BINDING_WalletRemittanceCodeListGetV30DataRemittanceInfoListRemittanceCodeStatus,
        self::NOT_USED_WalletRemittanceCodeListGetV30DataRemittanceInfoListRemittanceCodeStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum WalletRemittanceCodeListGetV30DataRemittanceInfoListRemittanceCodeStatus', $value));
        }
        return (string) $value;
    }
}
