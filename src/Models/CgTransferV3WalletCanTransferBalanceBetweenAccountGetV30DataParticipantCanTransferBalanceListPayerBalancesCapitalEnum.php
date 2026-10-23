<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerBalancesCapitalEnum
{
    public const CREDIT_BIDDING_CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerBalancesCapitalEnum = 'CREDIT_BIDDING';
    public const CREDIT_BRAND_CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerBalancesCapitalEnum = 'CREDIT_BRAND';
    public const CREDIT_GENERAL_CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerBalancesCapitalEnum = 'CREDIT_GENERAL';
    public const GRANT_COMMON_CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerBalancesCapitalEnum = 'GRANT_COMMON';
    public const GRANT_DEFAULT_CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerBalancesCapitalEnum = 'GRANT_DEFAULT';
    public const GRANT_SEARCH_CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerBalancesCapitalEnum = 'GRANT_SEARCH';
    public const GRANT_UNION_CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerBalancesCapitalEnum = 'GRANT_UNION';
    public const PREPAY_BIDDING_CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerBalancesCapitalEnum = 'PREPAY_BIDDING';
    public const PREPAY_BRAND_CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerBalancesCapitalEnum = 'PREPAY_BRAND';
    public const PREPAY_GENERAL_CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerBalancesCapitalEnum = 'PREPAY_GENERAL';

    public const ALLOWED_VALUES = [
        self::CREDIT_BIDDING_CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerBalancesCapitalEnum,
        self::CREDIT_BRAND_CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerBalancesCapitalEnum,
        self::CREDIT_GENERAL_CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerBalancesCapitalEnum,
        self::GRANT_COMMON_CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerBalancesCapitalEnum,
        self::GRANT_DEFAULT_CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerBalancesCapitalEnum,
        self::GRANT_SEARCH_CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerBalancesCapitalEnum,
        self::GRANT_UNION_CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerBalancesCapitalEnum,
        self::PREPAY_BIDDING_CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerBalancesCapitalEnum,
        self::PREPAY_BRAND_CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerBalancesCapitalEnum,
        self::PREPAY_GENERAL_CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerBalancesCapitalEnum,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerBalancesCapitalEnum', $value));
        }
        return (string) $value;
    }
}
