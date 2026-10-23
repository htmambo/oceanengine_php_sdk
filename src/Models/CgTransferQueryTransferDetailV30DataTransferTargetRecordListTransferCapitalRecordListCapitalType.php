<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferQueryTransferDetailV30DataTransferTargetRecordListTransferCapitalRecordListCapitalType
{
    public const CREDIT_BIDDING_CgTransferQueryTransferDetailV30DataTransferTargetRecordListTransferCapitalRecordListCapitalType = 'CREDIT_BIDDING';
    public const CREDIT_BRAND_CgTransferQueryTransferDetailV30DataTransferTargetRecordListTransferCapitalRecordListCapitalType = 'CREDIT_BRAND';
    public const CREDIT_GENERAL_CgTransferQueryTransferDetailV30DataTransferTargetRecordListTransferCapitalRecordListCapitalType = 'CREDIT_GENERAL';
    public const PREPAY_BIDDING_CgTransferQueryTransferDetailV30DataTransferTargetRecordListTransferCapitalRecordListCapitalType = 'PREPAY_BIDDING';
    public const PREPAY_BRAND_CgTransferQueryTransferDetailV30DataTransferTargetRecordListTransferCapitalRecordListCapitalType = 'PREPAY_BRAND';
    public const PREPAY_GENERAL_CgTransferQueryTransferDetailV30DataTransferTargetRecordListTransferCapitalRecordListCapitalType = 'PREPAY_GENERAL';

    public const ALLOWED_VALUES = [
        self::CREDIT_BIDDING_CgTransferQueryTransferDetailV30DataTransferTargetRecordListTransferCapitalRecordListCapitalType,
        self::CREDIT_BRAND_CgTransferQueryTransferDetailV30DataTransferTargetRecordListTransferCapitalRecordListCapitalType,
        self::CREDIT_GENERAL_CgTransferQueryTransferDetailV30DataTransferTargetRecordListTransferCapitalRecordListCapitalType,
        self::PREPAY_BIDDING_CgTransferQueryTransferDetailV30DataTransferTargetRecordListTransferCapitalRecordListCapitalType,
        self::PREPAY_BRAND_CgTransferQueryTransferDetailV30DataTransferTargetRecordListTransferCapitalRecordListCapitalType,
        self::PREPAY_GENERAL_CgTransferQueryTransferDetailV30DataTransferTargetRecordListTransferCapitalRecordListCapitalType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferQueryTransferDetailV30DataTransferTargetRecordListTransferCapitalRecordListCapitalType', $value));
        }
        return (string) $value;
    }
}
