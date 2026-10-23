<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferV2BpTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListCapitalSubType
{
    public const NORMAL_CgTransferV2BpTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListCapitalSubType = 'NORMAL';
    public const POST_PAY_CgTransferV2BpTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListCapitalSubType = 'POST_PAY';
    public const PRELOAN_CgTransferV2BpTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListCapitalSubType = 'PRELOAN';

    public const ALLOWED_VALUES = [
        self::NORMAL_CgTransferV2BpTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListCapitalSubType,
        self::POST_PAY_CgTransferV2BpTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListCapitalSubType,
        self::PRELOAN_CgTransferV2BpTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListCapitalSubType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferV2BpTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListCapitalSubType', $value));
        }
        return (string) $value;
    }
}
