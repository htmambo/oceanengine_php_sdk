<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferWalletTransferDetailV30DataTransferWalletRecordListTransferCapitalRecordListCapitalSubDetailListCapitalSubType
{
    public const NORMAL_CgTransferWalletTransferDetailV30DataTransferWalletRecordListTransferCapitalRecordListCapitalSubDetailListCapitalSubType = 'NORMAL';
    public const PRELOAN_CgTransferWalletTransferDetailV30DataTransferWalletRecordListTransferCapitalRecordListCapitalSubDetailListCapitalSubType = 'PRELOAN';

    public const ALLOWED_VALUES = [
        self::NORMAL_CgTransferWalletTransferDetailV30DataTransferWalletRecordListTransferCapitalRecordListCapitalSubDetailListCapitalSubType,
        self::PRELOAN_CgTransferWalletTransferDetailV30DataTransferWalletRecordListTransferCapitalRecordListCapitalSubDetailListCapitalSubType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferWalletTransferDetailV30DataTransferWalletRecordListTransferCapitalRecordListCapitalSubDetailListCapitalSubType', $value));
        }
        return (string) $value;
    }
}
