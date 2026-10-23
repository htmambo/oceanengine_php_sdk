<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferV2BpCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListCanTransferBalanceListCapitalSubType
{
    public const NORMAL_CgTransferV2BpCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListCanTransferBalanceListCapitalSubType = 'NORMAL';
    public const POST_PAY_CgTransferV2BpCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListCanTransferBalanceListCapitalSubType = 'POST_PAY';
    public const PRELOAN_CgTransferV2BpCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListCanTransferBalanceListCapitalSubType = 'PRELOAN';

    public const ALLOWED_VALUES = [
        self::NORMAL_CgTransferV2BpCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListCanTransferBalanceListCapitalSubType,
        self::POST_PAY_CgTransferV2BpCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListCanTransferBalanceListCapitalSubType,
        self::PRELOAN_CgTransferV2BpCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListCanTransferBalanceListCapitalSubType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferV2BpCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListCanTransferBalanceListCapitalSubType', $value));
        }
        return (string) $value;
    }
}
