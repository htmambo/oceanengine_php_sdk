<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferCapitalRecordListCapitalSubDetailListTransferStatus
{
    public const NO_TRANSFER_CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferCapitalRecordListCapitalSubDetailListTransferStatus = 'NO_TRANSFER';
    public const TRANSFER_FAILED_CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferCapitalRecordListCapitalSubDetailListTransferStatus = 'TRANSFER_FAILED';
    public const TRANSFER_ING_CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferCapitalRecordListCapitalSubDetailListTransferStatus = 'TRANSFER_ING';
    public const TRANSFER_PART_CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferCapitalRecordListCapitalSubDetailListTransferStatus = 'TRANSFER_PART';
    public const TRANSFER_SUCCESS_CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferCapitalRecordListCapitalSubDetailListTransferStatus = 'TRANSFER_SUCCESS';

    public const ALLOWED_VALUES = [
        self::NO_TRANSFER_CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferCapitalRecordListCapitalSubDetailListTransferStatus,
        self::TRANSFER_FAILED_CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferCapitalRecordListCapitalSubDetailListTransferStatus,
        self::TRANSFER_ING_CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferCapitalRecordListCapitalSubDetailListTransferStatus,
        self::TRANSFER_PART_CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferCapitalRecordListCapitalSubDetailListTransferStatus,
        self::TRANSFER_SUCCESS_CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferCapitalRecordListCapitalSubDetailListTransferStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferCapitalRecordListCapitalSubDetailListTransferStatus', $value));
        }
        return (string) $value;
    }
}
