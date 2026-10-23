<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferV3WalletTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListCapitalSource
{
    public const ACCOUNT_BALANCE_CgTransferV3WalletTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListCapitalSource = 'ACCOUNT_BALANCE';
    public const COMMISSION_CgTransferV3WalletTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListCapitalSource = 'COMMISSION';
    public const SHARED_WALLET_CgTransferV3WalletTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListCapitalSource = 'SHARED_WALLET';

    public const ALLOWED_VALUES = [
        self::ACCOUNT_BALANCE_CgTransferV3WalletTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListCapitalSource,
        self::COMMISSION_CgTransferV3WalletTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListCapitalSource,
        self::SHARED_WALLET_CgTransferV3WalletTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListCapitalSource,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferV3WalletTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListCapitalSource', $value));
        }
        return (string) $value;
    }
}
