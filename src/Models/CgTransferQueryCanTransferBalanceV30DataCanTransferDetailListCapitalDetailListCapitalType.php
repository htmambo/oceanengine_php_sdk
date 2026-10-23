<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferQueryCanTransferBalanceV30DataCanTransferDetailListCapitalDetailListCapitalType
{
    public const CREDIT_BIDDING_CgTransferQueryCanTransferBalanceV30DataCanTransferDetailListCapitalDetailListCapitalType = 'CREDIT_BIDDING';
    public const CREDIT_BRAND_CgTransferQueryCanTransferBalanceV30DataCanTransferDetailListCapitalDetailListCapitalType = 'CREDIT_BRAND';
    public const CREDIT_GENERAL_CgTransferQueryCanTransferBalanceV30DataCanTransferDetailListCapitalDetailListCapitalType = 'CREDIT_GENERAL';
    public const PREPAY_BIDDING_CgTransferQueryCanTransferBalanceV30DataCanTransferDetailListCapitalDetailListCapitalType = 'PREPAY_BIDDING';
    public const PREPAY_BRAND_CgTransferQueryCanTransferBalanceV30DataCanTransferDetailListCapitalDetailListCapitalType = 'PREPAY_BRAND';
    public const PREPAY_GENERAL_CgTransferQueryCanTransferBalanceV30DataCanTransferDetailListCapitalDetailListCapitalType = 'PREPAY_GENERAL';

    public const ALLOWED_VALUES = [
        self::CREDIT_BIDDING_CgTransferQueryCanTransferBalanceV30DataCanTransferDetailListCapitalDetailListCapitalType,
        self::CREDIT_BRAND_CgTransferQueryCanTransferBalanceV30DataCanTransferDetailListCapitalDetailListCapitalType,
        self::CREDIT_GENERAL_CgTransferQueryCanTransferBalanceV30DataCanTransferDetailListCapitalDetailListCapitalType,
        self::PREPAY_BIDDING_CgTransferQueryCanTransferBalanceV30DataCanTransferDetailListCapitalDetailListCapitalType,
        self::PREPAY_BRAND_CgTransferQueryCanTransferBalanceV30DataCanTransferDetailListCapitalDetailListCapitalType,
        self::PREPAY_GENERAL_CgTransferQueryCanTransferBalanceV30DataCanTransferDetailListCapitalDetailListCapitalType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferQueryCanTransferBalanceV30DataCanTransferDetailListCapitalDetailListCapitalType', $value));
        }
        return (string) $value;
    }
}
