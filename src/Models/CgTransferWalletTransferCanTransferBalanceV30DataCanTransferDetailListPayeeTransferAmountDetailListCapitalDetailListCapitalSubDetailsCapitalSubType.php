<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferWalletTransferCanTransferBalanceV30DataCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListCapitalSubDetailsCapitalSubType
{
    public const NORMAL_CgTransferWalletTransferCanTransferBalanceV30DataCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListCapitalSubDetailsCapitalSubType = 'NORMAL';
    public const PRELOAN_CgTransferWalletTransferCanTransferBalanceV30DataCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListCapitalSubDetailsCapitalSubType = 'PRELOAN';

    public const ALLOWED_VALUES = [
        self::NORMAL_CgTransferWalletTransferCanTransferBalanceV30DataCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListCapitalSubDetailsCapitalSubType,
        self::PRELOAN_CgTransferWalletTransferCanTransferBalanceV30DataCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListCapitalSubDetailsCapitalSubType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferWalletTransferCanTransferBalanceV30DataCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListCapitalSubDetailsCapitalSubType', $value));
        }
        return (string) $value;
    }
}
