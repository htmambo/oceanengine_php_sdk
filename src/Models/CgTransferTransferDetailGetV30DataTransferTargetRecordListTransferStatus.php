<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferStatus
{
    public const NO_TRANSFER_CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferStatus = 'NO_TRANSFER';
    public const TRANSFER_FAILED_CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferStatus = 'TRANSFER_FAILED';
    public const TRANSFER_ING_CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferStatus = 'TRANSFER_ING';
    public const TRANSFER_PART_CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferStatus = 'TRANSFER_PART';
    public const TRANSFER_SUCCESS_CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferStatus = 'TRANSFER_SUCCESS';

    public const ALLOWED_VALUES = [
        self::NO_TRANSFER_CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferStatus,
        self::TRANSFER_FAILED_CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferStatus,
        self::TRANSFER_ING_CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferStatus,
        self::TRANSFER_PART_CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferStatus,
        self::TRANSFER_SUCCESS_CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferStatus', $value));
        }
        return (string) $value;
    }
}
