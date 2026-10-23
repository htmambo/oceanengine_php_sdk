<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferCanTransferBalanceGetV30DataCanTransferDetailListCapitalDetailListCapitalType
{
    public const CREDIT_BIDDING_CgTransferCanTransferBalanceGetV30DataCanTransferDetailListCapitalDetailListCapitalType = 'CREDIT_BIDDING';
    public const CREDIT_BRAND_CgTransferCanTransferBalanceGetV30DataCanTransferDetailListCapitalDetailListCapitalType = 'CREDIT_BRAND';
    public const CREDIT_GENERAL_CgTransferCanTransferBalanceGetV30DataCanTransferDetailListCapitalDetailListCapitalType = 'CREDIT_GENERAL';
    public const GRANT_COMMON_CgTransferCanTransferBalanceGetV30DataCanTransferDetailListCapitalDetailListCapitalType = 'GRANT_COMMON';
    public const GRANT_DEFAULT_CgTransferCanTransferBalanceGetV30DataCanTransferDetailListCapitalDetailListCapitalType = 'GRANT_DEFAULT';
    public const GRANT_SEARCH_CgTransferCanTransferBalanceGetV30DataCanTransferDetailListCapitalDetailListCapitalType = 'GRANT_SEARCH';
    public const GRANT_UNION_CgTransferCanTransferBalanceGetV30DataCanTransferDetailListCapitalDetailListCapitalType = 'GRANT_UNION';
    public const PREPAY_BIDDING_CgTransferCanTransferBalanceGetV30DataCanTransferDetailListCapitalDetailListCapitalType = 'PREPAY_BIDDING';
    public const PREPAY_BRAND_CgTransferCanTransferBalanceGetV30DataCanTransferDetailListCapitalDetailListCapitalType = 'PREPAY_BRAND';
    public const PREPAY_GENERAL_CgTransferCanTransferBalanceGetV30DataCanTransferDetailListCapitalDetailListCapitalType = 'PREPAY_GENERAL';

    public const ALLOWED_VALUES = [
        self::CREDIT_BIDDING_CgTransferCanTransferBalanceGetV30DataCanTransferDetailListCapitalDetailListCapitalType,
        self::CREDIT_BRAND_CgTransferCanTransferBalanceGetV30DataCanTransferDetailListCapitalDetailListCapitalType,
        self::CREDIT_GENERAL_CgTransferCanTransferBalanceGetV30DataCanTransferDetailListCapitalDetailListCapitalType,
        self::GRANT_COMMON_CgTransferCanTransferBalanceGetV30DataCanTransferDetailListCapitalDetailListCapitalType,
        self::GRANT_DEFAULT_CgTransferCanTransferBalanceGetV30DataCanTransferDetailListCapitalDetailListCapitalType,
        self::GRANT_SEARCH_CgTransferCanTransferBalanceGetV30DataCanTransferDetailListCapitalDetailListCapitalType,
        self::GRANT_UNION_CgTransferCanTransferBalanceGetV30DataCanTransferDetailListCapitalDetailListCapitalType,
        self::PREPAY_BIDDING_CgTransferCanTransferBalanceGetV30DataCanTransferDetailListCapitalDetailListCapitalType,
        self::PREPAY_BRAND_CgTransferCanTransferBalanceGetV30DataCanTransferDetailListCapitalDetailListCapitalType,
        self::PREPAY_GENERAL_CgTransferCanTransferBalanceGetV30DataCanTransferDetailListCapitalDetailListCapitalType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferCanTransferBalanceGetV30DataCanTransferDetailListCapitalDetailListCapitalType', $value));
        }
        return (string) $value;
    }
}
