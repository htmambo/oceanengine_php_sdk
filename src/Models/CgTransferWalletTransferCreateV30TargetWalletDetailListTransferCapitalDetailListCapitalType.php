<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferWalletTransferCreateV30TargetWalletDetailListTransferCapitalDetailListCapitalType
{
    public const CREDIT_BIDDING_CgTransferWalletTransferCreateV30TargetWalletDetailListTransferCapitalDetailListCapitalType = 'CREDIT_BIDDING';
    public const CREDIT_BRAND_CgTransferWalletTransferCreateV30TargetWalletDetailListTransferCapitalDetailListCapitalType = 'CREDIT_BRAND';
    public const CREDIT_GENERAL_CgTransferWalletTransferCreateV30TargetWalletDetailListTransferCapitalDetailListCapitalType = 'CREDIT_GENERAL';
    public const PREPAY_BIDDING_CgTransferWalletTransferCreateV30TargetWalletDetailListTransferCapitalDetailListCapitalType = 'PREPAY_BIDDING';
    public const PREPAY_BRAND_CgTransferWalletTransferCreateV30TargetWalletDetailListTransferCapitalDetailListCapitalType = 'PREPAY_BRAND';
    public const PREPAY_GENERAL_CgTransferWalletTransferCreateV30TargetWalletDetailListTransferCapitalDetailListCapitalType = 'PREPAY_GENERAL';

    public const ALLOWED_VALUES = [
        self::CREDIT_BIDDING_CgTransferWalletTransferCreateV30TargetWalletDetailListTransferCapitalDetailListCapitalType,
        self::CREDIT_BRAND_CgTransferWalletTransferCreateV30TargetWalletDetailListTransferCapitalDetailListCapitalType,
        self::CREDIT_GENERAL_CgTransferWalletTransferCreateV30TargetWalletDetailListTransferCapitalDetailListCapitalType,
        self::PREPAY_BIDDING_CgTransferWalletTransferCreateV30TargetWalletDetailListTransferCapitalDetailListCapitalType,
        self::PREPAY_BRAND_CgTransferWalletTransferCreateV30TargetWalletDetailListTransferCapitalDetailListCapitalType,
        self::PREPAY_GENERAL_CgTransferWalletTransferCreateV30TargetWalletDetailListTransferCapitalDetailListCapitalType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferWalletTransferCreateV30TargetWalletDetailListTransferCapitalDetailListCapitalType', $value));
        }
        return (string) $value;
    }
}
