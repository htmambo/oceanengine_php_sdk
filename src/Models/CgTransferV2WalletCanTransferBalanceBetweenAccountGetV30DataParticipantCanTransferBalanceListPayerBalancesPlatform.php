<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerBalancesPlatform
{
    public const AD_CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerBalancesPlatform = 'AD';
    public const AD_ALL_CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerBalancesPlatform = 'AD_ALL';
    public const BENDITUI_CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerBalancesPlatform = 'BENDITUI';
    public const QIANCHUAN_CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerBalancesPlatform = 'QIANCHUAN';

    public const ALLOWED_VALUES = [
        self::AD_CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerBalancesPlatform,
        self::AD_ALL_CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerBalancesPlatform,
        self::BENDITUI_CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerBalancesPlatform,
        self::QIANCHUAN_CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerBalancesPlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerBalancesPlatform', $value));
        }
        return (string) $value;
    }
}
