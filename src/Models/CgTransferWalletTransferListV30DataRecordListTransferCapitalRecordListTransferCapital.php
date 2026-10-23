<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferWalletTransferListV30DataRecordListTransferCapitalRecordListTransferCapital
{
    public const CREDIT_BIDDING_CgTransferWalletTransferListV30DataRecordListTransferCapitalRecordListTransferCapital = 'CREDIT_BIDDING';
    public const CREDIT_BRAND_CgTransferWalletTransferListV30DataRecordListTransferCapitalRecordListTransferCapital = 'CREDIT_BRAND';
    public const CREDIT_GENERAL_CgTransferWalletTransferListV30DataRecordListTransferCapitalRecordListTransferCapital = 'CREDIT_GENERAL';
    public const PREPAY_BIDDING_CgTransferWalletTransferListV30DataRecordListTransferCapitalRecordListTransferCapital = 'PREPAY_BIDDING';
    public const PREPAY_BRAND_CgTransferWalletTransferListV30DataRecordListTransferCapitalRecordListTransferCapital = 'PREPAY_BRAND';
    public const PREPAY_GENERAL_CgTransferWalletTransferListV30DataRecordListTransferCapitalRecordListTransferCapital = 'PREPAY_GENERAL';

    public const ALLOWED_VALUES = [
        self::CREDIT_BIDDING_CgTransferWalletTransferListV30DataRecordListTransferCapitalRecordListTransferCapital,
        self::CREDIT_BRAND_CgTransferWalletTransferListV30DataRecordListTransferCapitalRecordListTransferCapital,
        self::CREDIT_GENERAL_CgTransferWalletTransferListV30DataRecordListTransferCapitalRecordListTransferCapital,
        self::PREPAY_BIDDING_CgTransferWalletTransferListV30DataRecordListTransferCapitalRecordListTransferCapital,
        self::PREPAY_BRAND_CgTransferWalletTransferListV30DataRecordListTransferCapitalRecordListTransferCapital,
        self::PREPAY_GENERAL_CgTransferWalletTransferListV30DataRecordListTransferCapitalRecordListTransferCapital,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferWalletTransferListV30DataRecordListTransferCapitalRecordListTransferCapital', $value));
        }
        return (string) $value;
    }
}
