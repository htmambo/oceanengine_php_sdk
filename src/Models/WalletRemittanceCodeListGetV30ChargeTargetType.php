<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class WalletRemittanceCodeListGetV30ChargeTargetType
{
    public const ACCOUNT_WalletRemittanceCodeListGetV30ChargeTargetType = 'ACCOUNT';
    public const WALLET_WalletRemittanceCodeListGetV30ChargeTargetType = 'WALLET';

    public const ALLOWED_VALUES = [
        self::ACCOUNT_WalletRemittanceCodeListGetV30ChargeTargetType,
        self::WALLET_WalletRemittanceCodeListGetV30ChargeTargetType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum WalletRemittanceCodeListGetV30ChargeTargetType', $value));
        }
        return (string) $value;
    }
}
