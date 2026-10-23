<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferWalletTransferCanTransferBalanceV30AccountType
{
    public const AD_CgTransferWalletTransferCanTransferBalanceV30AccountType = 'AD';
    public const AGENT_CgTransferWalletTransferCanTransferBalanceV30AccountType = 'AGENT';
    public const LOCAL_CgTransferWalletTransferCanTransferBalanceV30AccountType = 'LOCAL';
    public const QIANCHUAN_CgTransferWalletTransferCanTransferBalanceV30AccountType = 'QIANCHUAN';

    public const ALLOWED_VALUES = [
        self::AD_CgTransferWalletTransferCanTransferBalanceV30AccountType,
        self::AGENT_CgTransferWalletTransferCanTransferBalanceV30AccountType,
        self::LOCAL_CgTransferWalletTransferCanTransferBalanceV30AccountType,
        self::QIANCHUAN_CgTransferWalletTransferCanTransferBalanceV30AccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferWalletTransferCanTransferBalanceV30AccountType', $value));
        }
        return (string) $value;
    }
}
