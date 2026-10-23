<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferQueryCanTransferBalanceV30DataCanTransferDetailListCapitalDetailListCapitalSubDetailsCapitalSubType
{
    public const NORMAL_CgTransferQueryCanTransferBalanceV30DataCanTransferDetailListCapitalDetailListCapitalSubDetailsCapitalSubType = 'NORMAL';
    public const PRELOAN_CgTransferQueryCanTransferBalanceV30DataCanTransferDetailListCapitalDetailListCapitalSubDetailsCapitalSubType = 'PRELOAN';

    public const ALLOWED_VALUES = [
        self::NORMAL_CgTransferQueryCanTransferBalanceV30DataCanTransferDetailListCapitalDetailListCapitalSubDetailsCapitalSubType,
        self::PRELOAN_CgTransferQueryCanTransferBalanceV30DataCanTransferDetailListCapitalDetailListCapitalSubDetailsCapitalSubType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferQueryCanTransferBalanceV30DataCanTransferDetailListCapitalDetailListCapitalSubDetailsCapitalSubType', $value));
        }
        return (string) $value;
    }
}
