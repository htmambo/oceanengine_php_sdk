<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferCanTransferBalanceGetV30DataCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListCapitalType
{
    public const CREDIT_BIDDING_CgTransferCanTransferBalanceGetV30DataCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListCapitalType = 'CREDIT_BIDDING';
    public const CREDIT_BRAND_CgTransferCanTransferBalanceGetV30DataCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListCapitalType = 'CREDIT_BRAND';
    public const CREDIT_GENERAL_CgTransferCanTransferBalanceGetV30DataCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListCapitalType = 'CREDIT_GENERAL';
    public const GRANT_COMMON_CgTransferCanTransferBalanceGetV30DataCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListCapitalType = 'GRANT_COMMON';
    public const GRANT_DEFAULT_CgTransferCanTransferBalanceGetV30DataCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListCapitalType = 'GRANT_DEFAULT';
    public const GRANT_SEARCH_CgTransferCanTransferBalanceGetV30DataCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListCapitalType = 'GRANT_SEARCH';
    public const GRANT_UNION_CgTransferCanTransferBalanceGetV30DataCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListCapitalType = 'GRANT_UNION';
    public const PREPAY_BIDDING_CgTransferCanTransferBalanceGetV30DataCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListCapitalType = 'PREPAY_BIDDING';
    public const PREPAY_BRAND_CgTransferCanTransferBalanceGetV30DataCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListCapitalType = 'PREPAY_BRAND';
    public const PREPAY_GENERAL_CgTransferCanTransferBalanceGetV30DataCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListCapitalType = 'PREPAY_GENERAL';

    public const ALLOWED_VALUES = [
        self::CREDIT_BIDDING_CgTransferCanTransferBalanceGetV30DataCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListCapitalType,
        self::CREDIT_BRAND_CgTransferCanTransferBalanceGetV30DataCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListCapitalType,
        self::CREDIT_GENERAL_CgTransferCanTransferBalanceGetV30DataCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListCapitalType,
        self::GRANT_COMMON_CgTransferCanTransferBalanceGetV30DataCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListCapitalType,
        self::GRANT_DEFAULT_CgTransferCanTransferBalanceGetV30DataCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListCapitalType,
        self::GRANT_SEARCH_CgTransferCanTransferBalanceGetV30DataCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListCapitalType,
        self::GRANT_UNION_CgTransferCanTransferBalanceGetV30DataCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListCapitalType,
        self::PREPAY_BIDDING_CgTransferCanTransferBalanceGetV30DataCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListCapitalType,
        self::PREPAY_BRAND_CgTransferCanTransferBalanceGetV30DataCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListCapitalType,
        self::PREPAY_GENERAL_CgTransferCanTransferBalanceGetV30DataCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListCapitalType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferCanTransferBalanceGetV30DataCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListCapitalType', $value));
        }
        return (string) $value;
    }
}
