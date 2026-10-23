<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferWalletTransferDetailV30DataTransferWalletRecordListTransferCapitalRecordListPlatform
{
    public const AD_CgTransferWalletTransferDetailV30DataTransferWalletRecordListTransferCapitalRecordListPlatform = 'AD';
    public const AD_ALL_CgTransferWalletTransferDetailV30DataTransferWalletRecordListTransferCapitalRecordListPlatform = 'AD_ALL';
    public const BENDITUI_CgTransferWalletTransferDetailV30DataTransferWalletRecordListTransferCapitalRecordListPlatform = 'BENDITUI';
    public const QIANCHUAN_CgTransferWalletTransferDetailV30DataTransferWalletRecordListTransferCapitalRecordListPlatform = 'QIANCHUAN';
    public const STAR_CgTransferWalletTransferDetailV30DataTransferWalletRecordListTransferCapitalRecordListPlatform = 'STAR';

    public const ALLOWED_VALUES = [
        self::AD_CgTransferWalletTransferDetailV30DataTransferWalletRecordListTransferCapitalRecordListPlatform,
        self::AD_ALL_CgTransferWalletTransferDetailV30DataTransferWalletRecordListTransferCapitalRecordListPlatform,
        self::BENDITUI_CgTransferWalletTransferDetailV30DataTransferWalletRecordListTransferCapitalRecordListPlatform,
        self::QIANCHUAN_CgTransferWalletTransferDetailV30DataTransferWalletRecordListTransferCapitalRecordListPlatform,
        self::STAR_CgTransferWalletTransferDetailV30DataTransferWalletRecordListTransferCapitalRecordListPlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferWalletTransferDetailV30DataTransferWalletRecordListTransferCapitalRecordListPlatform', $value));
        }
        return (string) $value;
    }
}
