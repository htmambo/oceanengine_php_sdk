<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferCapitalRecordListCapitalType
{
    public const CREDIT_BIDDING_CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferCapitalRecordListCapitalType = 'CREDIT_BIDDING';
    public const CREDIT_BRAND_CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferCapitalRecordListCapitalType = 'CREDIT_BRAND';
    public const CREDIT_GENERAL_CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferCapitalRecordListCapitalType = 'CREDIT_GENERAL';
    public const GRANT_COMMON_CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferCapitalRecordListCapitalType = 'GRANT_COMMON';
    public const GRANT_DEFAULT_CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferCapitalRecordListCapitalType = 'GRANT_DEFAULT';
    public const GRANT_SEARCH_CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferCapitalRecordListCapitalType = 'GRANT_SEARCH';
    public const GRANT_UNION_CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferCapitalRecordListCapitalType = 'GRANT_UNION';
    public const PREPAY_BIDDING_CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferCapitalRecordListCapitalType = 'PREPAY_BIDDING';
    public const PREPAY_BRAND_CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferCapitalRecordListCapitalType = 'PREPAY_BRAND';
    public const PREPAY_GENERAL_CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferCapitalRecordListCapitalType = 'PREPAY_GENERAL';

    public const ALLOWED_VALUES = [
        self::CREDIT_BIDDING_CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferCapitalRecordListCapitalType,
        self::CREDIT_BRAND_CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferCapitalRecordListCapitalType,
        self::CREDIT_GENERAL_CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferCapitalRecordListCapitalType,
        self::GRANT_COMMON_CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferCapitalRecordListCapitalType,
        self::GRANT_DEFAULT_CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferCapitalRecordListCapitalType,
        self::GRANT_SEARCH_CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferCapitalRecordListCapitalType,
        self::GRANT_UNION_CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferCapitalRecordListCapitalType,
        self::PREPAY_BIDDING_CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferCapitalRecordListCapitalType,
        self::PREPAY_BRAND_CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferCapitalRecordListCapitalType,
        self::PREPAY_GENERAL_CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferCapitalRecordListCapitalType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferCapitalRecordListCapitalType', $value));
        }
        return (string) $value;
    }
}
