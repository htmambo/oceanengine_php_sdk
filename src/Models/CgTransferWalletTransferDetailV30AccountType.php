<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferWalletTransferDetailV30AccountType
{
    public const AD_CgTransferWalletTransferDetailV30AccountType = 'AD';
    public const AGENT_CgTransferWalletTransferDetailV30AccountType = 'AGENT';
    public const LOCAL_CgTransferWalletTransferDetailV30AccountType = 'LOCAL';
    public const QIANCHUAN_CgTransferWalletTransferDetailV30AccountType = 'QIANCHUAN';

    public const ALLOWED_VALUES = [
        self::AD_CgTransferWalletTransferDetailV30AccountType,
        self::AGENT_CgTransferWalletTransferDetailV30AccountType,
        self::LOCAL_CgTransferWalletTransferDetailV30AccountType,
        self::QIANCHUAN_CgTransferWalletTransferDetailV30AccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferWalletTransferDetailV30AccountType', $value));
        }
        return (string) $value;
    }
}
