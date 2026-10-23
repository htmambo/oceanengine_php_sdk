<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferQueryCanTransferBalanceV30DataCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListCapitalSubDetailsCapitalSubType
{
    public const NORMAL_CgTransferQueryCanTransferBalanceV30DataCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListCapitalSubDetailsCapitalSubType = 'NORMAL';
    public const PRELOAN_CgTransferQueryCanTransferBalanceV30DataCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListCapitalSubDetailsCapitalSubType = 'PRELOAN';

    public const ALLOWED_VALUES = [
        self::NORMAL_CgTransferQueryCanTransferBalanceV30DataCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListCapitalSubDetailsCapitalSubType,
        self::PRELOAN_CgTransferQueryCanTransferBalanceV30DataCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListCapitalSubDetailsCapitalSubType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferQueryCanTransferBalanceV30DataCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListCapitalSubDetailsCapitalSubType', $value));
        }
        return (string) $value;
    }
}
