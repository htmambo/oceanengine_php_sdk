<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferWalletTransferDetailV30DataTransferWalletRecordListTransferCapitalRecordListTransferStatus
{
    public const NO_TRANSFER_CgTransferWalletTransferDetailV30DataTransferWalletRecordListTransferCapitalRecordListTransferStatus = 'NO_TRANSFER';
    public const TRANSFER_FAILED_CgTransferWalletTransferDetailV30DataTransferWalletRecordListTransferCapitalRecordListTransferStatus = 'TRANSFER_FAILED';
    public const TRANSFER_ING_CgTransferWalletTransferDetailV30DataTransferWalletRecordListTransferCapitalRecordListTransferStatus = 'TRANSFER_ING';
    public const TRANSFER_PART_CgTransferWalletTransferDetailV30DataTransferWalletRecordListTransferCapitalRecordListTransferStatus = 'TRANSFER_PART';
    public const TRANSFER_SUCCESS_CgTransferWalletTransferDetailV30DataTransferWalletRecordListTransferCapitalRecordListTransferStatus = 'TRANSFER_SUCCESS';

    public const ALLOWED_VALUES = [
        self::NO_TRANSFER_CgTransferWalletTransferDetailV30DataTransferWalletRecordListTransferCapitalRecordListTransferStatus,
        self::TRANSFER_FAILED_CgTransferWalletTransferDetailV30DataTransferWalletRecordListTransferCapitalRecordListTransferStatus,
        self::TRANSFER_ING_CgTransferWalletTransferDetailV30DataTransferWalletRecordListTransferCapitalRecordListTransferStatus,
        self::TRANSFER_PART_CgTransferWalletTransferDetailV30DataTransferWalletRecordListTransferCapitalRecordListTransferStatus,
        self::TRANSFER_SUCCESS_CgTransferWalletTransferDetailV30DataTransferWalletRecordListTransferCapitalRecordListTransferStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferWalletTransferDetailV30DataTransferWalletRecordListTransferCapitalRecordListTransferStatus', $value));
        }
        return (string) $value;
    }
}
