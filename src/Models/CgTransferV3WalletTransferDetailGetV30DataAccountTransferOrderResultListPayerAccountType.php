<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferV3WalletTransferDetailGetV30DataAccountTransferOrderResultListPayerAccountType
{
    public const ADV_ACCOUNT_CgTransferV3WalletTransferDetailGetV30DataAccountTransferOrderResultListPayerAccountType = 'ADV_ACCOUNT';
    public const AGENT_ACCOUNT_CgTransferV3WalletTransferDetailGetV30DataAccountTransferOrderResultListPayerAccountType = 'AGENT_ACCOUNT';
    public const CHILD_AGENT_ACCOUNT_CgTransferV3WalletTransferDetailGetV30DataAccountTransferOrderResultListPayerAccountType = 'CHILD_AGENT_ACCOUNT';
    public const DIRECT_ADV_ACCOUNT_CgTransferV3WalletTransferDetailGetV30DataAccountTransferOrderResultListPayerAccountType = 'DIRECT_ADV_ACCOUNT';
    public const MAIN_WALLET_CgTransferV3WalletTransferDetailGetV30DataAccountTransferOrderResultListPayerAccountType = 'MAIN_WALLET';
    public const RESERVE_WALLET_CgTransferV3WalletTransferDetailGetV30DataAccountTransferOrderResultListPayerAccountType = 'RESERVE_WALLET';
    public const SELF_SERVICE_ACCOUNT_CgTransferV3WalletTransferDetailGetV30DataAccountTransferOrderResultListPayerAccountType = 'SELF_SERVICE_ACCOUNT';
    public const SUB_WALLET_CgTransferV3WalletTransferDetailGetV30DataAccountTransferOrderResultListPayerAccountType = 'SUB_WALLET';
    public const SVIP_ADV_ACCOUNT_CgTransferV3WalletTransferDetailGetV30DataAccountTransferOrderResultListPayerAccountType = 'SVIP_ADV_ACCOUNT';
    public const SVIP_BP_ACCOUNT_CgTransferV3WalletTransferDetailGetV30DataAccountTransferOrderResultListPayerAccountType = 'SVIP_BP_ACCOUNT';

    public const ALLOWED_VALUES = [
        self::ADV_ACCOUNT_CgTransferV3WalletTransferDetailGetV30DataAccountTransferOrderResultListPayerAccountType,
        self::AGENT_ACCOUNT_CgTransferV3WalletTransferDetailGetV30DataAccountTransferOrderResultListPayerAccountType,
        self::CHILD_AGENT_ACCOUNT_CgTransferV3WalletTransferDetailGetV30DataAccountTransferOrderResultListPayerAccountType,
        self::DIRECT_ADV_ACCOUNT_CgTransferV3WalletTransferDetailGetV30DataAccountTransferOrderResultListPayerAccountType,
        self::MAIN_WALLET_CgTransferV3WalletTransferDetailGetV30DataAccountTransferOrderResultListPayerAccountType,
        self::RESERVE_WALLET_CgTransferV3WalletTransferDetailGetV30DataAccountTransferOrderResultListPayerAccountType,
        self::SELF_SERVICE_ACCOUNT_CgTransferV3WalletTransferDetailGetV30DataAccountTransferOrderResultListPayerAccountType,
        self::SUB_WALLET_CgTransferV3WalletTransferDetailGetV30DataAccountTransferOrderResultListPayerAccountType,
        self::SVIP_ADV_ACCOUNT_CgTransferV3WalletTransferDetailGetV30DataAccountTransferOrderResultListPayerAccountType,
        self::SVIP_BP_ACCOUNT_CgTransferV3WalletTransferDetailGetV30DataAccountTransferOrderResultListPayerAccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferV3WalletTransferDetailGetV30DataAccountTransferOrderResultListPayerAccountType', $value));
        }
        return (string) $value;
    }
}
