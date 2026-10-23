<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferV3WalletTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListCapitalSubType
{
    public const NORMAL_CgTransferV3WalletTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListCapitalSubType = 'NORMAL';
    public const POST_PAY_CgTransferV3WalletTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListCapitalSubType = 'POST_PAY';
    public const PRELOAN_CgTransferV3WalletTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListCapitalSubType = 'PRELOAN';

    public const ALLOWED_VALUES = [
        self::NORMAL_CgTransferV3WalletTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListCapitalSubType,
        self::POST_PAY_CgTransferV3WalletTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListCapitalSubType,
        self::PRELOAN_CgTransferV3WalletTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListCapitalSubType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferV3WalletTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListCapitalSubType', $value));
        }
        return (string) $value;
    }
}
