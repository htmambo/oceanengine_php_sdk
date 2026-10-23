<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferTransferCreateV30Platform
{
    public const AD_CgTransferTransferCreateV30Platform = 'AD';
    public const BENDITUI_CgTransferTransferCreateV30Platform = 'BENDITUI';
    public const QIANCHUAN_CgTransferTransferCreateV30Platform = 'QIANCHUAN';

    public const ALLOWED_VALUES = [
        self::AD_CgTransferTransferCreateV30Platform,
        self::BENDITUI_CgTransferTransferCreateV30Platform,
        self::QIANCHUAN_CgTransferTransferCreateV30Platform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferTransferCreateV30Platform', $value));
        }
        return (string) $value;
    }
}
