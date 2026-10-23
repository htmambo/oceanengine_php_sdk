<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferWalletTransferListV30DataRecordListPayeeCategory
{
    public const ACCOUNT_CgTransferWalletTransferListV30DataRecordListPayeeCategory = 'ACCOUNT';
    public const WALLET_CgTransferWalletTransferListV30DataRecordListPayeeCategory = 'WALLET';

    public const ALLOWED_VALUES = [
        self::ACCOUNT_CgTransferWalletTransferListV30DataRecordListPayeeCategory,
        self::WALLET_CgTransferWalletTransferListV30DataRecordListPayeeCategory,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferWalletTransferListV30DataRecordListPayeeCategory', $value));
        }
        return (string) $value;
    }
}
