<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferV2BpCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerBalancesPlatform
{
    public const AD_CgTransferV2BpCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerBalancesPlatform = 'AD';
    public const AD_ALL_CgTransferV2BpCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerBalancesPlatform = 'AD_ALL';
    public const BENDITUI_CgTransferV2BpCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerBalancesPlatform = 'BENDITUI';
    public const QIANCHUAN_CgTransferV2BpCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerBalancesPlatform = 'QIANCHUAN';
    public const STAR_CgTransferV2BpCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerBalancesPlatform = 'STAR';

    public const ALLOWED_VALUES = [
        self::AD_CgTransferV2BpCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerBalancesPlatform,
        self::AD_ALL_CgTransferV2BpCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerBalancesPlatform,
        self::BENDITUI_CgTransferV2BpCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerBalancesPlatform,
        self::QIANCHUAN_CgTransferV2BpCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerBalancesPlatform,
        self::STAR_CgTransferV2BpCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerBalancesPlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferV2BpCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerBalancesPlatform', $value));
        }
        return (string) $value;
    }
}
