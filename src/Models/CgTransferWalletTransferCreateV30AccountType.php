<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferWalletTransferCreateV30AccountType
{
    public const AD_CgTransferWalletTransferCreateV30AccountType = 'AD';
    public const AGENT_CgTransferWalletTransferCreateV30AccountType = 'AGENT';
    public const LOCAL_CgTransferWalletTransferCreateV30AccountType = 'LOCAL';
    public const QIANCHUAN_CgTransferWalletTransferCreateV30AccountType = 'QIANCHUAN';

    public const ALLOWED_VALUES = [
        self::AD_CgTransferWalletTransferCreateV30AccountType,
        self::AGENT_CgTransferWalletTransferCreateV30AccountType,
        self::LOCAL_CgTransferWalletTransferCreateV30AccountType,
        self::QIANCHUAN_CgTransferWalletTransferCreateV30AccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferWalletTransferCreateV30AccountType', $value));
        }
        return (string) $value;
    }
}
