<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferV2WalletTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListPayeePlatform
{
    public const AD_CgTransferV2WalletTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListPayeePlatform = 'AD';
    public const AD_ALL_CgTransferV2WalletTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListPayeePlatform = 'AD_ALL';
    public const BENDITUI_CgTransferV2WalletTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListPayeePlatform = 'BENDITUI';
    public const QIANCHUAN_CgTransferV2WalletTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListPayeePlatform = 'QIANCHUAN';

    public const ALLOWED_VALUES = [
        self::AD_CgTransferV2WalletTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListPayeePlatform,
        self::AD_ALL_CgTransferV2WalletTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListPayeePlatform,
        self::BENDITUI_CgTransferV2WalletTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListPayeePlatform,
        self::QIANCHUAN_CgTransferV2WalletTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListPayeePlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferV2WalletTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListPayeePlatform', $value));
        }
        return (string) $value;
    }
}
