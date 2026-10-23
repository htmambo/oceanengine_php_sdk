<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferWalletTransferCanTransferBalanceV30DataCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListPlatform
{
    public const AD_CgTransferWalletTransferCanTransferBalanceV30DataCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListPlatform = 'AD';
    public const AD_ALL_CgTransferWalletTransferCanTransferBalanceV30DataCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListPlatform = 'AD_ALL';
    public const BENDITUI_CgTransferWalletTransferCanTransferBalanceV30DataCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListPlatform = 'BENDITUI';
    public const QIANCHUAN_CgTransferWalletTransferCanTransferBalanceV30DataCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListPlatform = 'QIANCHUAN';
    public const STAR_CgTransferWalletTransferCanTransferBalanceV30DataCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListPlatform = 'STAR';

    public const ALLOWED_VALUES = [
        self::AD_CgTransferWalletTransferCanTransferBalanceV30DataCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListPlatform,
        self::AD_ALL_CgTransferWalletTransferCanTransferBalanceV30DataCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListPlatform,
        self::BENDITUI_CgTransferWalletTransferCanTransferBalanceV30DataCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListPlatform,
        self::QIANCHUAN_CgTransferWalletTransferCanTransferBalanceV30DataCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListPlatform,
        self::STAR_CgTransferWalletTransferCanTransferBalanceV30DataCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListPlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferWalletTransferCanTransferBalanceV30DataCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListPlatform', $value));
        }
        return (string) $value;
    }
}
