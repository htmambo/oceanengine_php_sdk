<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferTransferDetailGetV30Platform
{
    public const AD_CgTransferTransferDetailGetV30Platform = 'AD';
    public const BENDITUI_CgTransferTransferDetailGetV30Platform = 'BENDITUI';
    public const QIANCHUAN_CgTransferTransferDetailGetV30Platform = 'QIANCHUAN';

    public const ALLOWED_VALUES = [
        self::AD_CgTransferTransferDetailGetV30Platform,
        self::BENDITUI_CgTransferTransferDetailGetV30Platform,
        self::QIANCHUAN_CgTransferTransferDetailGetV30Platform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferTransferDetailGetV30Platform', $value));
        }
        return (string) $value;
    }
}
