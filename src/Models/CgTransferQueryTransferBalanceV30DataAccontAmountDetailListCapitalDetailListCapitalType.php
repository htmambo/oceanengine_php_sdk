<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferQueryTransferBalanceV30DataAccontAmountDetailListCapitalDetailListCapitalType
{
    public const CREDIT_BIDDING_CgTransferQueryTransferBalanceV30DataAccontAmountDetailListCapitalDetailListCapitalType = 'CREDIT_BIDDING';
    public const CREDIT_BRAND_CgTransferQueryTransferBalanceV30DataAccontAmountDetailListCapitalDetailListCapitalType = 'CREDIT_BRAND';
    public const CREDIT_GENERAL_CgTransferQueryTransferBalanceV30DataAccontAmountDetailListCapitalDetailListCapitalType = 'CREDIT_GENERAL';
    public const PREPAY_BIDDING_CgTransferQueryTransferBalanceV30DataAccontAmountDetailListCapitalDetailListCapitalType = 'PREPAY_BIDDING';
    public const PREPAY_BRAND_CgTransferQueryTransferBalanceV30DataAccontAmountDetailListCapitalDetailListCapitalType = 'PREPAY_BRAND';
    public const PREPAY_GENERAL_CgTransferQueryTransferBalanceV30DataAccontAmountDetailListCapitalDetailListCapitalType = 'PREPAY_GENERAL';

    public const ALLOWED_VALUES = [
        self::CREDIT_BIDDING_CgTransferQueryTransferBalanceV30DataAccontAmountDetailListCapitalDetailListCapitalType,
        self::CREDIT_BRAND_CgTransferQueryTransferBalanceV30DataAccontAmountDetailListCapitalDetailListCapitalType,
        self::CREDIT_GENERAL_CgTransferQueryTransferBalanceV30DataAccontAmountDetailListCapitalDetailListCapitalType,
        self::PREPAY_BIDDING_CgTransferQueryTransferBalanceV30DataAccontAmountDetailListCapitalDetailListCapitalType,
        self::PREPAY_BRAND_CgTransferQueryTransferBalanceV30DataAccontAmountDetailListCapitalDetailListCapitalType,
        self::PREPAY_GENERAL_CgTransferQueryTransferBalanceV30DataAccontAmountDetailListCapitalDetailListCapitalType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferQueryTransferBalanceV30DataAccontAmountDetailListCapitalDetailListCapitalType', $value));
        }
        return (string) $value;
    }
}
