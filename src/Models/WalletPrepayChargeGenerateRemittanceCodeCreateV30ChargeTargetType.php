<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class WalletPrepayChargeGenerateRemittanceCodeCreateV30ChargeTargetType
{
    public const ACCOUNT_WalletPrepayChargeGenerateRemittanceCodeCreateV30ChargeTargetType = 'ACCOUNT';
    public const WALLET_WalletPrepayChargeGenerateRemittanceCodeCreateV30ChargeTargetType = 'WALLET';

    public const ALLOWED_VALUES = [
        self::ACCOUNT_WalletPrepayChargeGenerateRemittanceCodeCreateV30ChargeTargetType,
        self::WALLET_WalletPrepayChargeGenerateRemittanceCodeCreateV30ChargeTargetType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum WalletPrepayChargeGenerateRemittanceCodeCreateV30ChargeTargetType', $value));
        }
        return (string) $value;
    }
}
