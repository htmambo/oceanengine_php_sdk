<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferCanTransferBalanceGetV30Platform
{
    public const AD_CgTransferCanTransferBalanceGetV30Platform = 'AD';
    public const BENDITUI_CgTransferCanTransferBalanceGetV30Platform = 'BENDITUI';
    public const QIANCHUAN_CgTransferCanTransferBalanceGetV30Platform = 'QIANCHUAN';

    public const ALLOWED_VALUES = [
        self::AD_CgTransferCanTransferBalanceGetV30Platform,
        self::BENDITUI_CgTransferCanTransferBalanceGetV30Platform,
        self::QIANCHUAN_CgTransferCanTransferBalanceGetV30Platform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferCanTransferBalanceGetV30Platform', $value));
        }
        return (string) $value;
    }
}
