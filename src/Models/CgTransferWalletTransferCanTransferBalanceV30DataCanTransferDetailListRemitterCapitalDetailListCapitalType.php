<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferWalletTransferCanTransferBalanceV30DataCanTransferDetailListRemitterCapitalDetailListCapitalType
{
    public const CREDIT_BIDDING_CgTransferWalletTransferCanTransferBalanceV30DataCanTransferDetailListRemitterCapitalDetailListCapitalType = 'CREDIT_BIDDING';
    public const CREDIT_BRAND_CgTransferWalletTransferCanTransferBalanceV30DataCanTransferDetailListRemitterCapitalDetailListCapitalType = 'CREDIT_BRAND';
    public const CREDIT_GENERAL_CgTransferWalletTransferCanTransferBalanceV30DataCanTransferDetailListRemitterCapitalDetailListCapitalType = 'CREDIT_GENERAL';
    public const PREPAY_BIDDING_CgTransferWalletTransferCanTransferBalanceV30DataCanTransferDetailListRemitterCapitalDetailListCapitalType = 'PREPAY_BIDDING';
    public const PREPAY_BRAND_CgTransferWalletTransferCanTransferBalanceV30DataCanTransferDetailListRemitterCapitalDetailListCapitalType = 'PREPAY_BRAND';
    public const PREPAY_GENERAL_CgTransferWalletTransferCanTransferBalanceV30DataCanTransferDetailListRemitterCapitalDetailListCapitalType = 'PREPAY_GENERAL';

    public const ALLOWED_VALUES = [
        self::CREDIT_BIDDING_CgTransferWalletTransferCanTransferBalanceV30DataCanTransferDetailListRemitterCapitalDetailListCapitalType,
        self::CREDIT_BRAND_CgTransferWalletTransferCanTransferBalanceV30DataCanTransferDetailListRemitterCapitalDetailListCapitalType,
        self::CREDIT_GENERAL_CgTransferWalletTransferCanTransferBalanceV30DataCanTransferDetailListRemitterCapitalDetailListCapitalType,
        self::PREPAY_BIDDING_CgTransferWalletTransferCanTransferBalanceV30DataCanTransferDetailListRemitterCapitalDetailListCapitalType,
        self::PREPAY_BRAND_CgTransferWalletTransferCanTransferBalanceV30DataCanTransferDetailListRemitterCapitalDetailListCapitalType,
        self::PREPAY_GENERAL_CgTransferWalletTransferCanTransferBalanceV30DataCanTransferDetailListRemitterCapitalDetailListCapitalType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferWalletTransferCanTransferBalanceV30DataCanTransferDetailListRemitterCapitalDetailListCapitalType', $value));
        }
        return (string) $value;
    }
}
