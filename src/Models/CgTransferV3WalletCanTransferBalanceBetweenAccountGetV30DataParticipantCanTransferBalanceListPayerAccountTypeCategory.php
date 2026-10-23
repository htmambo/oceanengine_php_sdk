<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerAccountTypeCategory
{
    public const AGENT_ACCOUNT_CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerAccountTypeCategory = 'AGENT_ACCOUNT';
    public const BP_ACCOUNT_CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerAccountTypeCategory = 'BP_ACCOUNT';
    public const WALLET_ACCOUNT_CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerAccountTypeCategory = 'WALLET_ACCOUNT';

    public const ALLOWED_VALUES = [
        self::AGENT_ACCOUNT_CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerAccountTypeCategory,
        self::BP_ACCOUNT_CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerAccountTypeCategory,
        self::WALLET_ACCOUNT_CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerAccountTypeCategory,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerAccountTypeCategory', $value));
        }
        return (string) $value;
    }
}
