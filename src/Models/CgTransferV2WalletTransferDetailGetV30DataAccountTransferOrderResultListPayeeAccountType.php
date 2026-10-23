<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferV2WalletTransferDetailGetV30DataAccountTransferOrderResultListPayeeAccountType
{
    public const ADV_ACCOUNT_CgTransferV2WalletTransferDetailGetV30DataAccountTransferOrderResultListPayeeAccountType = 'ADV_ACCOUNT';
    public const AGENT_ACCOUNT_CgTransferV2WalletTransferDetailGetV30DataAccountTransferOrderResultListPayeeAccountType = 'AGENT_ACCOUNT';
    public const CHILD_AGENT_ACCOUNT_CgTransferV2WalletTransferDetailGetV30DataAccountTransferOrderResultListPayeeAccountType = 'CHILD_AGENT_ACCOUNT';
    public const DIRECT_ADV_ACCOUNT_CgTransferV2WalletTransferDetailGetV30DataAccountTransferOrderResultListPayeeAccountType = 'DIRECT_ADV_ACCOUNT';
    public const MAIN_WALLET_CgTransferV2WalletTransferDetailGetV30DataAccountTransferOrderResultListPayeeAccountType = 'MAIN_WALLET';
    public const RESERVE_WALLET_CgTransferV2WalletTransferDetailGetV30DataAccountTransferOrderResultListPayeeAccountType = 'RESERVE_WALLET';
    public const SELF_SERVICE_ACCOUNT_CgTransferV2WalletTransferDetailGetV30DataAccountTransferOrderResultListPayeeAccountType = 'SELF_SERVICE_ACCOUNT';
    public const SUB_WALLET_CgTransferV2WalletTransferDetailGetV30DataAccountTransferOrderResultListPayeeAccountType = 'SUB_WALLET';
    public const SVIP_ADV_ACCOUNT_CgTransferV2WalletTransferDetailGetV30DataAccountTransferOrderResultListPayeeAccountType = 'SVIP_ADV_ACCOUNT';
    public const SVIP_BP_ACCOUNT_CgTransferV2WalletTransferDetailGetV30DataAccountTransferOrderResultListPayeeAccountType = 'SVIP_BP_ACCOUNT';

    public const ALLOWED_VALUES = [
        self::ADV_ACCOUNT_CgTransferV2WalletTransferDetailGetV30DataAccountTransferOrderResultListPayeeAccountType,
        self::AGENT_ACCOUNT_CgTransferV2WalletTransferDetailGetV30DataAccountTransferOrderResultListPayeeAccountType,
        self::CHILD_AGENT_ACCOUNT_CgTransferV2WalletTransferDetailGetV30DataAccountTransferOrderResultListPayeeAccountType,
        self::DIRECT_ADV_ACCOUNT_CgTransferV2WalletTransferDetailGetV30DataAccountTransferOrderResultListPayeeAccountType,
        self::MAIN_WALLET_CgTransferV2WalletTransferDetailGetV30DataAccountTransferOrderResultListPayeeAccountType,
        self::RESERVE_WALLET_CgTransferV2WalletTransferDetailGetV30DataAccountTransferOrderResultListPayeeAccountType,
        self::SELF_SERVICE_ACCOUNT_CgTransferV2WalletTransferDetailGetV30DataAccountTransferOrderResultListPayeeAccountType,
        self::SUB_WALLET_CgTransferV2WalletTransferDetailGetV30DataAccountTransferOrderResultListPayeeAccountType,
        self::SVIP_ADV_ACCOUNT_CgTransferV2WalletTransferDetailGetV30DataAccountTransferOrderResultListPayeeAccountType,
        self::SVIP_BP_ACCOUNT_CgTransferV2WalletTransferDetailGetV30DataAccountTransferOrderResultListPayeeAccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferV2WalletTransferDetailGetV30DataAccountTransferOrderResultListPayeeAccountType', $value));
        }
        return (string) $value;
    }
}
