<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferWalletTransferDetailV30DataTransferWalletRecordListTransferCapitalRecordListCapitalSubDetailListTransferStatus
{
    public const NO_TRANSFER_CgTransferWalletTransferDetailV30DataTransferWalletRecordListTransferCapitalRecordListCapitalSubDetailListTransferStatus = 'NO_TRANSFER';
    public const TRANSFER_FAILED_CgTransferWalletTransferDetailV30DataTransferWalletRecordListTransferCapitalRecordListCapitalSubDetailListTransferStatus = 'TRANSFER_FAILED';
    public const TRANSFER_ING_CgTransferWalletTransferDetailV30DataTransferWalletRecordListTransferCapitalRecordListCapitalSubDetailListTransferStatus = 'TRANSFER_ING';
    public const TRANSFER_PART_CgTransferWalletTransferDetailV30DataTransferWalletRecordListTransferCapitalRecordListCapitalSubDetailListTransferStatus = 'TRANSFER_PART';
    public const TRANSFER_SUCCESS_CgTransferWalletTransferDetailV30DataTransferWalletRecordListTransferCapitalRecordListCapitalSubDetailListTransferStatus = 'TRANSFER_SUCCESS';

    public const ALLOWED_VALUES = [
        self::NO_TRANSFER_CgTransferWalletTransferDetailV30DataTransferWalletRecordListTransferCapitalRecordListCapitalSubDetailListTransferStatus,
        self::TRANSFER_FAILED_CgTransferWalletTransferDetailV30DataTransferWalletRecordListTransferCapitalRecordListCapitalSubDetailListTransferStatus,
        self::TRANSFER_ING_CgTransferWalletTransferDetailV30DataTransferWalletRecordListTransferCapitalRecordListCapitalSubDetailListTransferStatus,
        self::TRANSFER_PART_CgTransferWalletTransferDetailV30DataTransferWalletRecordListTransferCapitalRecordListCapitalSubDetailListTransferStatus,
        self::TRANSFER_SUCCESS_CgTransferWalletTransferDetailV30DataTransferWalletRecordListTransferCapitalRecordListCapitalSubDetailListTransferStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferWalletTransferDetailV30DataTransferWalletRecordListTransferCapitalRecordListCapitalSubDetailListTransferStatus', $value));
        }
        return (string) $value;
    }
}
