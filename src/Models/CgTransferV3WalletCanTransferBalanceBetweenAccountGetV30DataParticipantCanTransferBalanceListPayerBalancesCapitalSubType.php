<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerBalancesCapitalSubType
{
    public const NORMAL_CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerBalancesCapitalSubType = 'NORMAL';
    public const POST_PAY_CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerBalancesCapitalSubType = 'POST_PAY';
    public const PRELOAN_CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerBalancesCapitalSubType = 'PRELOAN';

    public const ALLOWED_VALUES = [
        self::NORMAL_CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerBalancesCapitalSubType,
        self::POST_PAY_CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerBalancesCapitalSubType,
        self::PRELOAN_CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerBalancesCapitalSubType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerBalancesCapitalSubType', $value));
        }
        return (string) $value;
    }
}
