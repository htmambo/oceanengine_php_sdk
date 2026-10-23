<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferCanTransferTargetListV30Platform
{
    public const AD_CgTransferCanTransferTargetListV30Platform = 'AD';
    public const BENDITUI_CgTransferCanTransferTargetListV30Platform = 'BENDITUI';
    public const QIANCHUAN_CgTransferCanTransferTargetListV30Platform = 'QIANCHUAN';

    public const ALLOWED_VALUES = [
        self::AD_CgTransferCanTransferTargetListV30Platform,
        self::BENDITUI_CgTransferCanTransferTargetListV30Platform,
        self::QIANCHUAN_CgTransferCanTransferTargetListV30Platform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferCanTransferTargetListV30Platform', $value));
        }
        return (string) $value;
    }
}
