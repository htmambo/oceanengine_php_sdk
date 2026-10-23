<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferWalletTransferListV30DataRecordListTransferTargetStatus
{
    public const NO_TRANSFER_CgTransferWalletTransferListV30DataRecordListTransferTargetStatus = 'NO_TRANSFER';
    public const TRANSFER_FAILED_CgTransferWalletTransferListV30DataRecordListTransferTargetStatus = 'TRANSFER_FAILED';
    public const TRANSFER_ING_CgTransferWalletTransferListV30DataRecordListTransferTargetStatus = 'TRANSFER_ING';
    public const TRANSFER_PART_CgTransferWalletTransferListV30DataRecordListTransferTargetStatus = 'TRANSFER_PART';
    public const TRANSFER_SUCCESS_CgTransferWalletTransferListV30DataRecordListTransferTargetStatus = 'TRANSFER_SUCCESS';

    public const ALLOWED_VALUES = [
        self::NO_TRANSFER_CgTransferWalletTransferListV30DataRecordListTransferTargetStatus,
        self::TRANSFER_FAILED_CgTransferWalletTransferListV30DataRecordListTransferTargetStatus,
        self::TRANSFER_ING_CgTransferWalletTransferListV30DataRecordListTransferTargetStatus,
        self::TRANSFER_PART_CgTransferWalletTransferListV30DataRecordListTransferTargetStatus,
        self::TRANSFER_SUCCESS_CgTransferWalletTransferListV30DataRecordListTransferTargetStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferWalletTransferListV30DataRecordListTransferTargetStatus', $value));
        }
        return (string) $value;
    }
}
