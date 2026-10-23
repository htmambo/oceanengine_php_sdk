<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferWalletTransferCanTransferBalanceV30DataCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListCapitalType
{
    public const CREDIT_BIDDING_CgTransferWalletTransferCanTransferBalanceV30DataCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListCapitalType = 'CREDIT_BIDDING';
    public const CREDIT_BRAND_CgTransferWalletTransferCanTransferBalanceV30DataCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListCapitalType = 'CREDIT_BRAND';
    public const CREDIT_GENERAL_CgTransferWalletTransferCanTransferBalanceV30DataCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListCapitalType = 'CREDIT_GENERAL';
    public const PREPAY_BIDDING_CgTransferWalletTransferCanTransferBalanceV30DataCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListCapitalType = 'PREPAY_BIDDING';
    public const PREPAY_BRAND_CgTransferWalletTransferCanTransferBalanceV30DataCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListCapitalType = 'PREPAY_BRAND';
    public const PREPAY_GENERAL_CgTransferWalletTransferCanTransferBalanceV30DataCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListCapitalType = 'PREPAY_GENERAL';

    public const ALLOWED_VALUES = [
        self::CREDIT_BIDDING_CgTransferWalletTransferCanTransferBalanceV30DataCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListCapitalType,
        self::CREDIT_BRAND_CgTransferWalletTransferCanTransferBalanceV30DataCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListCapitalType,
        self::CREDIT_GENERAL_CgTransferWalletTransferCanTransferBalanceV30DataCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListCapitalType,
        self::PREPAY_BIDDING_CgTransferWalletTransferCanTransferBalanceV30DataCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListCapitalType,
        self::PREPAY_BRAND_CgTransferWalletTransferCanTransferBalanceV30DataCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListCapitalType,
        self::PREPAY_GENERAL_CgTransferWalletTransferCanTransferBalanceV30DataCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListCapitalType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferWalletTransferCanTransferBalanceV30DataCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListCapitalType', $value));
        }
        return (string) $value;
    }
}
