<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferWalletTransferListV30DataRecordListTransferCapitalRecordListTransferStatus
{
    public const NO_TRANSFER_CgTransferWalletTransferListV30DataRecordListTransferCapitalRecordListTransferStatus = 'NO_TRANSFER';
    public const TRANSFER_FAILED_CgTransferWalletTransferListV30DataRecordListTransferCapitalRecordListTransferStatus = 'TRANSFER_FAILED';
    public const TRANSFER_ING_CgTransferWalletTransferListV30DataRecordListTransferCapitalRecordListTransferStatus = 'TRANSFER_ING';
    public const TRANSFER_PART_CgTransferWalletTransferListV30DataRecordListTransferCapitalRecordListTransferStatus = 'TRANSFER_PART';
    public const TRANSFER_SUCCESS_CgTransferWalletTransferListV30DataRecordListTransferCapitalRecordListTransferStatus = 'TRANSFER_SUCCESS';

    public const ALLOWED_VALUES = [
        self::NO_TRANSFER_CgTransferWalletTransferListV30DataRecordListTransferCapitalRecordListTransferStatus,
        self::TRANSFER_FAILED_CgTransferWalletTransferListV30DataRecordListTransferCapitalRecordListTransferStatus,
        self::TRANSFER_ING_CgTransferWalletTransferListV30DataRecordListTransferCapitalRecordListTransferStatus,
        self::TRANSFER_PART_CgTransferWalletTransferListV30DataRecordListTransferCapitalRecordListTransferStatus,
        self::TRANSFER_SUCCESS_CgTransferWalletTransferListV30DataRecordListTransferCapitalRecordListTransferStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferWalletTransferListV30DataRecordListTransferCapitalRecordListTransferStatus', $value));
        }
        return (string) $value;
    }
}
