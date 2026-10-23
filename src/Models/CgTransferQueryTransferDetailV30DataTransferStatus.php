<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferQueryTransferDetailV30DataTransferStatus
{
    public const NO_TRANSFER_CgTransferQueryTransferDetailV30DataTransferStatus = 'NO_TRANSFER';
    public const TRANSFER_FAILED_CgTransferQueryTransferDetailV30DataTransferStatus = 'TRANSFER_FAILED';
    public const TRANSFER_ING_CgTransferQueryTransferDetailV30DataTransferStatus = 'TRANSFER_ING';
    public const TRANSFER_PART_CgTransferQueryTransferDetailV30DataTransferStatus = 'TRANSFER_PART';
    public const TRANSFER_SUCCESS_CgTransferQueryTransferDetailV30DataTransferStatus = 'TRANSFER_SUCCESS';

    public const ALLOWED_VALUES = [
        self::NO_TRANSFER_CgTransferQueryTransferDetailV30DataTransferStatus,
        self::TRANSFER_FAILED_CgTransferQueryTransferDetailV30DataTransferStatus,
        self::TRANSFER_ING_CgTransferQueryTransferDetailV30DataTransferStatus,
        self::TRANSFER_PART_CgTransferQueryTransferDetailV30DataTransferStatus,
        self::TRANSFER_SUCCESS_CgTransferQueryTransferDetailV30DataTransferStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferQueryTransferDetailV30DataTransferStatus', $value));
        }
        return (string) $value;
    }
}
