<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferV2BpCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListCanTransferBalanceListPlatform
{
    public const AD_CgTransferV2BpCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListCanTransferBalanceListPlatform = 'AD';
    public const AD_ALL_CgTransferV2BpCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListCanTransferBalanceListPlatform = 'AD_ALL';
    public const BENDITUI_CgTransferV2BpCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListCanTransferBalanceListPlatform = 'BENDITUI';
    public const QIANCHUAN_CgTransferV2BpCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListCanTransferBalanceListPlatform = 'QIANCHUAN';
    public const STAR_CgTransferV2BpCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListCanTransferBalanceListPlatform = 'STAR';

    public const ALLOWED_VALUES = [
        self::AD_CgTransferV2BpCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListCanTransferBalanceListPlatform,
        self::AD_ALL_CgTransferV2BpCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListCanTransferBalanceListPlatform,
        self::BENDITUI_CgTransferV2BpCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListCanTransferBalanceListPlatform,
        self::QIANCHUAN_CgTransferV2BpCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListCanTransferBalanceListPlatform,
        self::STAR_CgTransferV2BpCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListCanTransferBalanceListPlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferV2BpCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListCanTransferBalanceListPlatform', $value));
        }
        return (string) $value;
    }
}
