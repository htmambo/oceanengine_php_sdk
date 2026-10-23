<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferWalletTransferCreateV30TargetWalletDetailListTransferCapitalDetailListCapitalSubType
{
    public const NORMAL_CgTransferWalletTransferCreateV30TargetWalletDetailListTransferCapitalDetailListCapitalSubType = 'NORMAL';
    public const PRELOAN_CgTransferWalletTransferCreateV30TargetWalletDetailListTransferCapitalDetailListCapitalSubType = 'PRELOAN';

    public const ALLOWED_VALUES = [
        self::NORMAL_CgTransferWalletTransferCreateV30TargetWalletDetailListTransferCapitalDetailListCapitalSubType,
        self::PRELOAN_CgTransferWalletTransferCreateV30TargetWalletDetailListTransferCapitalDetailListCapitalSubType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferWalletTransferCreateV30TargetWalletDetailListTransferCapitalDetailListCapitalSubType', $value));
        }
        return (string) $value;
    }
}
