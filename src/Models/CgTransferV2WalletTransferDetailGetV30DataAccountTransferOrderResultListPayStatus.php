<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferV2WalletTransferDetailGetV30DataAccountTransferOrderResultListPayStatus
{
    public const NO_TRANSFER_CgTransferV2WalletTransferDetailGetV30DataAccountTransferOrderResultListPayStatus = 'NO_TRANSFER';
    public const TRANSFER_FAILED_CgTransferV2WalletTransferDetailGetV30DataAccountTransferOrderResultListPayStatus = 'TRANSFER_FAILED';
    public const TRANSFER_ING_CgTransferV2WalletTransferDetailGetV30DataAccountTransferOrderResultListPayStatus = 'TRANSFER_ING';
    public const TRANSFER_PART_CgTransferV2WalletTransferDetailGetV30DataAccountTransferOrderResultListPayStatus = 'TRANSFER_PART';
    public const TRANSFER_SUCCESS_CgTransferV2WalletTransferDetailGetV30DataAccountTransferOrderResultListPayStatus = 'TRANSFER_SUCCESS';

    public const ALLOWED_VALUES = [
        self::NO_TRANSFER_CgTransferV2WalletTransferDetailGetV30DataAccountTransferOrderResultListPayStatus,
        self::TRANSFER_FAILED_CgTransferV2WalletTransferDetailGetV30DataAccountTransferOrderResultListPayStatus,
        self::TRANSFER_ING_CgTransferV2WalletTransferDetailGetV30DataAccountTransferOrderResultListPayStatus,
        self::TRANSFER_PART_CgTransferV2WalletTransferDetailGetV30DataAccountTransferOrderResultListPayStatus,
        self::TRANSFER_SUCCESS_CgTransferV2WalletTransferDetailGetV30DataAccountTransferOrderResultListPayStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferV2WalletTransferDetailGetV30DataAccountTransferOrderResultListPayStatus', $value));
        }
        return (string) $value;
    }
}
