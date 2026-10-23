<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferV2WalletTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListPayStatus
{
    public const NO_TRANSFER_CgTransferV2WalletTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListPayStatus = 'NO_TRANSFER';
    public const TRANSFER_FAILED_CgTransferV2WalletTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListPayStatus = 'TRANSFER_FAILED';
    public const TRANSFER_ING_CgTransferV2WalletTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListPayStatus = 'TRANSFER_ING';
    public const TRANSFER_PART_CgTransferV2WalletTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListPayStatus = 'TRANSFER_PART';
    public const TRANSFER_SUCCESS_CgTransferV2WalletTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListPayStatus = 'TRANSFER_SUCCESS';

    public const ALLOWED_VALUES = [
        self::NO_TRANSFER_CgTransferV2WalletTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListPayStatus,
        self::TRANSFER_FAILED_CgTransferV2WalletTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListPayStatus,
        self::TRANSFER_ING_CgTransferV2WalletTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListPayStatus,
        self::TRANSFER_PART_CgTransferV2WalletTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListPayStatus,
        self::TRANSFER_SUCCESS_CgTransferV2WalletTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListPayStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferV2WalletTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListPayStatus', $value));
        }
        return (string) $value;
    }
}
