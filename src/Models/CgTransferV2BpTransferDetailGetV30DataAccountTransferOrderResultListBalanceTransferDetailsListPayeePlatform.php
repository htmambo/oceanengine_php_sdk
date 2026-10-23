<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferV2BpTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListPayeePlatform
{
    public const AD_CgTransferV2BpTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListPayeePlatform = 'AD';
    public const AD_ALL_CgTransferV2BpTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListPayeePlatform = 'AD_ALL';
    public const BENDITUI_CgTransferV2BpTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListPayeePlatform = 'BENDITUI';
    public const QIANCHUAN_CgTransferV2BpTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListPayeePlatform = 'QIANCHUAN';
    public const STAR_CgTransferV2BpTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListPayeePlatform = 'STAR';

    public const ALLOWED_VALUES = [
        self::AD_CgTransferV2BpTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListPayeePlatform,
        self::AD_ALL_CgTransferV2BpTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListPayeePlatform,
        self::BENDITUI_CgTransferV2BpTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListPayeePlatform,
        self::QIANCHUAN_CgTransferV2BpTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListPayeePlatform,
        self::STAR_CgTransferV2BpTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListPayeePlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferV2BpTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListPayeePlatform', $value));
        }
        return (string) $value;
    }
}
