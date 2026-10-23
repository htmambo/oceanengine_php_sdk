<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferV2BpCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListCanTransferBalanceListCapitalSource
{
    public const ACCOUNT_BALANCE_CgTransferV2BpCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListCanTransferBalanceListCapitalSource = 'ACCOUNT_BALANCE';
    public const COMMISSION_CgTransferV2BpCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListCanTransferBalanceListCapitalSource = 'COMMISSION';
    public const SHARED_WALLET_CgTransferV2BpCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListCanTransferBalanceListCapitalSource = 'SHARED_WALLET';

    public const ALLOWED_VALUES = [
        self::ACCOUNT_BALANCE_CgTransferV2BpCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListCanTransferBalanceListCapitalSource,
        self::COMMISSION_CgTransferV2BpCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListCanTransferBalanceListCapitalSource,
        self::SHARED_WALLET_CgTransferV2BpCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListCanTransferBalanceListCapitalSource,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferV2BpCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListCanTransferBalanceListCapitalSource', $value));
        }
        return (string) $value;
    }
}
