<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListCanTransferBalanceListPlatform
{
    public const AD_CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListCanTransferBalanceListPlatform = 'AD';
    public const AD_ALL_CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListCanTransferBalanceListPlatform = 'AD_ALL';
    public const BENDITUI_CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListCanTransferBalanceListPlatform = 'BENDITUI';
    public const QIANCHUAN_CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListCanTransferBalanceListPlatform = 'QIANCHUAN';

    public const ALLOWED_VALUES = [
        self::AD_CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListCanTransferBalanceListPlatform,
        self::AD_ALL_CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListCanTransferBalanceListPlatform,
        self::BENDITUI_CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListCanTransferBalanceListPlatform,
        self::QIANCHUAN_CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListCanTransferBalanceListPlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListCanTransferBalanceListPlatform', $value));
        }
        return (string) $value;
    }
}
