<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferWalletTransferListV30AccountType
{
    public const AD_CgTransferWalletTransferListV30AccountType = 'AD';
    public const AGENT_CgTransferWalletTransferListV30AccountType = 'AGENT';
    public const LOCAL_CgTransferWalletTransferListV30AccountType = 'LOCAL';
    public const QIANCHUAN_CgTransferWalletTransferListV30AccountType = 'QIANCHUAN';

    public const ALLOWED_VALUES = [
        self::AD_CgTransferWalletTransferListV30AccountType,
        self::AGENT_CgTransferWalletTransferListV30AccountType,
        self::LOCAL_CgTransferWalletTransferListV30AccountType,
        self::QIANCHUAN_CgTransferWalletTransferListV30AccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferWalletTransferListV30AccountType', $value));
        }
        return (string) $value;
    }
}
