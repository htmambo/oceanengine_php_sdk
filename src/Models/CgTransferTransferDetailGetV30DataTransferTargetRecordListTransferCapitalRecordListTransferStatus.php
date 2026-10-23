<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferCapitalRecordListTransferStatus
{
    public const NO_TRANSFER_CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferCapitalRecordListTransferStatus = 'NO_TRANSFER';
    public const TRANSFER_FAILED_CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferCapitalRecordListTransferStatus = 'TRANSFER_FAILED';
    public const TRANSFER_ING_CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferCapitalRecordListTransferStatus = 'TRANSFER_ING';
    public const TRANSFER_SUCCESS_CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferCapitalRecordListTransferStatus = 'TRANSFER_SUCCESS';

    public const ALLOWED_VALUES = [
        self::NO_TRANSFER_CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferCapitalRecordListTransferStatus,
        self::TRANSFER_FAILED_CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferCapitalRecordListTransferStatus,
        self::TRANSFER_ING_CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferCapitalRecordListTransferStatus,
        self::TRANSFER_SUCCESS_CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferCapitalRecordListTransferStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferCapitalRecordListTransferStatus', $value));
        }
        return (string) $value;
    }
}
