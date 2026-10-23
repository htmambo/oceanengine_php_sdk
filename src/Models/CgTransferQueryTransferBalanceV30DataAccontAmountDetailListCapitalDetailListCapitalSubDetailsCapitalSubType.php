<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferQueryTransferBalanceV30DataAccontAmountDetailListCapitalDetailListCapitalSubDetailsCapitalSubType
{
    public const NORMAL_CgTransferQueryTransferBalanceV30DataAccontAmountDetailListCapitalDetailListCapitalSubDetailsCapitalSubType = 'NORMAL';
    public const PRELOAN_CgTransferQueryTransferBalanceV30DataAccontAmountDetailListCapitalDetailListCapitalSubDetailsCapitalSubType = 'PRELOAN';

    public const ALLOWED_VALUES = [
        self::NORMAL_CgTransferQueryTransferBalanceV30DataAccontAmountDetailListCapitalDetailListCapitalSubDetailsCapitalSubType,
        self::PRELOAN_CgTransferQueryTransferBalanceV30DataAccontAmountDetailListCapitalDetailListCapitalSubDetailsCapitalSubType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferQueryTransferBalanceV30DataAccontAmountDetailListCapitalDetailListCapitalSubDetailsCapitalSubType', $value));
        }
        return (string) $value;
    }
}
