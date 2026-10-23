<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferWalletTransferDetailV30DataTransferWalletRecordListTransferCapitalRecordListCapitalType
{
    public const CREDIT_BIDDING_CgTransferWalletTransferDetailV30DataTransferWalletRecordListTransferCapitalRecordListCapitalType = 'CREDIT_BIDDING';
    public const CREDIT_BRAND_CgTransferWalletTransferDetailV30DataTransferWalletRecordListTransferCapitalRecordListCapitalType = 'CREDIT_BRAND';
    public const CREDIT_GENERAL_CgTransferWalletTransferDetailV30DataTransferWalletRecordListTransferCapitalRecordListCapitalType = 'CREDIT_GENERAL';
    public const PREPAY_BIDDING_CgTransferWalletTransferDetailV30DataTransferWalletRecordListTransferCapitalRecordListCapitalType = 'PREPAY_BIDDING';
    public const PREPAY_BRAND_CgTransferWalletTransferDetailV30DataTransferWalletRecordListTransferCapitalRecordListCapitalType = 'PREPAY_BRAND';
    public const PREPAY_GENERAL_CgTransferWalletTransferDetailV30DataTransferWalletRecordListTransferCapitalRecordListCapitalType = 'PREPAY_GENERAL';

    public const ALLOWED_VALUES = [
        self::CREDIT_BIDDING_CgTransferWalletTransferDetailV30DataTransferWalletRecordListTransferCapitalRecordListCapitalType,
        self::CREDIT_BRAND_CgTransferWalletTransferDetailV30DataTransferWalletRecordListTransferCapitalRecordListCapitalType,
        self::CREDIT_GENERAL_CgTransferWalletTransferDetailV30DataTransferWalletRecordListTransferCapitalRecordListCapitalType,
        self::PREPAY_BIDDING_CgTransferWalletTransferDetailV30DataTransferWalletRecordListTransferCapitalRecordListCapitalType,
        self::PREPAY_BRAND_CgTransferWalletTransferDetailV30DataTransferWalletRecordListTransferCapitalRecordListCapitalType,
        self::PREPAY_GENERAL_CgTransferWalletTransferDetailV30DataTransferWalletRecordListTransferCapitalRecordListCapitalType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferWalletTransferDetailV30DataTransferWalletRecordListTransferCapitalRecordListCapitalType', $value));
        }
        return (string) $value;
    }
}
