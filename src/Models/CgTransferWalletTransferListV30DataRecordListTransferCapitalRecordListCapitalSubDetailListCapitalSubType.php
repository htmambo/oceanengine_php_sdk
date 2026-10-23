<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferWalletTransferListV30DataRecordListTransferCapitalRecordListCapitalSubDetailListCapitalSubType
{
    public const NORMAL_CgTransferWalletTransferListV30DataRecordListTransferCapitalRecordListCapitalSubDetailListCapitalSubType = 'NORMAL';
    public const PRELOAN_CgTransferWalletTransferListV30DataRecordListTransferCapitalRecordListCapitalSubDetailListCapitalSubType = 'PRELOAN';

    public const ALLOWED_VALUES = [
        self::NORMAL_CgTransferWalletTransferListV30DataRecordListTransferCapitalRecordListCapitalSubDetailListCapitalSubType,
        self::PRELOAN_CgTransferWalletTransferListV30DataRecordListTransferCapitalRecordListCapitalSubDetailListCapitalSubType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferWalletTransferListV30DataRecordListTransferCapitalRecordListCapitalSubDetailListCapitalSubType', $value));
        }
        return (string) $value;
    }
}
