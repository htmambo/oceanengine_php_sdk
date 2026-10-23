<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferTransferBalanceGetV30Platform
{
    public const AD_CgTransferTransferBalanceGetV30Platform = 'AD';
    public const BENDITUI_CgTransferTransferBalanceGetV30Platform = 'BENDITUI';
    public const QIANCHUAN_CgTransferTransferBalanceGetV30Platform = 'QIANCHUAN';

    public const ALLOWED_VALUES = [
        self::AD_CgTransferTransferBalanceGetV30Platform,
        self::BENDITUI_CgTransferTransferBalanceGetV30Platform,
        self::QIANCHUAN_CgTransferTransferBalanceGetV30Platform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferTransferBalanceGetV30Platform', $value));
        }
        return (string) $value;
    }
}
