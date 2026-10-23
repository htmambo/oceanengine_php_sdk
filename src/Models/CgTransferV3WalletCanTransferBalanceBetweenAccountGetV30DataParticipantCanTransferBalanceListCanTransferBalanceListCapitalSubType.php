<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListCanTransferBalanceListCapitalSubType
{
    public const NORMAL_CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListCanTransferBalanceListCapitalSubType = 'NORMAL';
    public const POST_PAY_CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListCanTransferBalanceListCapitalSubType = 'POST_PAY';
    public const PRELOAN_CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListCanTransferBalanceListCapitalSubType = 'PRELOAN';

    public const ALLOWED_VALUES = [
        self::NORMAL_CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListCanTransferBalanceListCapitalSubType,
        self::POST_PAY_CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListCanTransferBalanceListCapitalSubType,
        self::PRELOAN_CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListCanTransferBalanceListCapitalSubType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListCanTransferBalanceListCapitalSubType', $value));
        }
        return (string) $value;
    }
}
