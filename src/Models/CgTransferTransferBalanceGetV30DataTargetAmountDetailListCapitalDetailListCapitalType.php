<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferTransferBalanceGetV30DataTargetAmountDetailListCapitalDetailListCapitalType
{
    public const CREDIT_BIDDING_CgTransferTransferBalanceGetV30DataTargetAmountDetailListCapitalDetailListCapitalType = 'CREDIT_BIDDING';
    public const CREDIT_BRAND_CgTransferTransferBalanceGetV30DataTargetAmountDetailListCapitalDetailListCapitalType = 'CREDIT_BRAND';
    public const CREDIT_GENERAL_CgTransferTransferBalanceGetV30DataTargetAmountDetailListCapitalDetailListCapitalType = 'CREDIT_GENERAL';
    public const GRANT_COMMON_CgTransferTransferBalanceGetV30DataTargetAmountDetailListCapitalDetailListCapitalType = 'GRANT_COMMON';
    public const GRANT_DEFAULT_CgTransferTransferBalanceGetV30DataTargetAmountDetailListCapitalDetailListCapitalType = 'GRANT_DEFAULT';
    public const GRANT_SEARCH_CgTransferTransferBalanceGetV30DataTargetAmountDetailListCapitalDetailListCapitalType = 'GRANT_SEARCH';
    public const GRANT_UNION_CgTransferTransferBalanceGetV30DataTargetAmountDetailListCapitalDetailListCapitalType = 'GRANT_UNION';
    public const PREPAY_BIDDING_CgTransferTransferBalanceGetV30DataTargetAmountDetailListCapitalDetailListCapitalType = 'PREPAY_BIDDING';
    public const PREPAY_BRAND_CgTransferTransferBalanceGetV30DataTargetAmountDetailListCapitalDetailListCapitalType = 'PREPAY_BRAND';
    public const PREPAY_GENERAL_CgTransferTransferBalanceGetV30DataTargetAmountDetailListCapitalDetailListCapitalType = 'PREPAY_GENERAL';

    public const ALLOWED_VALUES = [
        self::CREDIT_BIDDING_CgTransferTransferBalanceGetV30DataTargetAmountDetailListCapitalDetailListCapitalType,
        self::CREDIT_BRAND_CgTransferTransferBalanceGetV30DataTargetAmountDetailListCapitalDetailListCapitalType,
        self::CREDIT_GENERAL_CgTransferTransferBalanceGetV30DataTargetAmountDetailListCapitalDetailListCapitalType,
        self::GRANT_COMMON_CgTransferTransferBalanceGetV30DataTargetAmountDetailListCapitalDetailListCapitalType,
        self::GRANT_DEFAULT_CgTransferTransferBalanceGetV30DataTargetAmountDetailListCapitalDetailListCapitalType,
        self::GRANT_SEARCH_CgTransferTransferBalanceGetV30DataTargetAmountDetailListCapitalDetailListCapitalType,
        self::GRANT_UNION_CgTransferTransferBalanceGetV30DataTargetAmountDetailListCapitalDetailListCapitalType,
        self::PREPAY_BIDDING_CgTransferTransferBalanceGetV30DataTargetAmountDetailListCapitalDetailListCapitalType,
        self::PREPAY_BRAND_CgTransferTransferBalanceGetV30DataTargetAmountDetailListCapitalDetailListCapitalType,
        self::PREPAY_GENERAL_CgTransferTransferBalanceGetV30DataTargetAmountDetailListCapitalDetailListCapitalType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferTransferBalanceGetV30DataTargetAmountDetailListCapitalDetailListCapitalType', $value));
        }
        return (string) $value;
    }
}
