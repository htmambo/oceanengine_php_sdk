<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferWalletTransferListV30DataRecordListTransferCapitalRecordListPlatform
{
    public const AD_CgTransferWalletTransferListV30DataRecordListTransferCapitalRecordListPlatform = 'AD';
    public const AD_ALL_CgTransferWalletTransferListV30DataRecordListTransferCapitalRecordListPlatform = 'AD_ALL';
    public const BENDITUI_CgTransferWalletTransferListV30DataRecordListTransferCapitalRecordListPlatform = 'BENDITUI';
    public const QIANCHUAN_CgTransferWalletTransferListV30DataRecordListTransferCapitalRecordListPlatform = 'QIANCHUAN';
    public const STAR_CgTransferWalletTransferListV30DataRecordListTransferCapitalRecordListPlatform = 'STAR';

    public const ALLOWED_VALUES = [
        self::AD_CgTransferWalletTransferListV30DataRecordListTransferCapitalRecordListPlatform,
        self::AD_ALL_CgTransferWalletTransferListV30DataRecordListTransferCapitalRecordListPlatform,
        self::BENDITUI_CgTransferWalletTransferListV30DataRecordListTransferCapitalRecordListPlatform,
        self::QIANCHUAN_CgTransferWalletTransferListV30DataRecordListTransferCapitalRecordListPlatform,
        self::STAR_CgTransferWalletTransferListV30DataRecordListTransferCapitalRecordListPlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferWalletTransferListV30DataRecordListTransferCapitalRecordListPlatform', $value));
        }
        return (string) $value;
    }
}
