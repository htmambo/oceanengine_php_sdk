<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayeeAccountTypeCategory
{
    public const AGENT_ACCOUNT_CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayeeAccountTypeCategory = 'AGENT_ACCOUNT';
    public const BP_ACCOUNT_CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayeeAccountTypeCategory = 'BP_ACCOUNT';
    public const WALLET_ACCOUNT_CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayeeAccountTypeCategory = 'WALLET_ACCOUNT';

    public const ALLOWED_VALUES = [
        self::AGENT_ACCOUNT_CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayeeAccountTypeCategory,
        self::BP_ACCOUNT_CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayeeAccountTypeCategory,
        self::WALLET_ACCOUNT_CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayeeAccountTypeCategory,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayeeAccountTypeCategory', $value));
        }
        return (string) $value;
    }
}
