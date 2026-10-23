<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferCreateTransferV30TargetAccountDetailListTransferCapitalDetailListCapitalSubType
{
    public const NORMAL_CgTransferCreateTransferV30TargetAccountDetailListTransferCapitalDetailListCapitalSubType = 'NORMAL';
    public const PRELOAN_CgTransferCreateTransferV30TargetAccountDetailListTransferCapitalDetailListCapitalSubType = 'PRELOAN';

    public const ALLOWED_VALUES = [
        self::NORMAL_CgTransferCreateTransferV30TargetAccountDetailListTransferCapitalDetailListCapitalSubType,
        self::PRELOAN_CgTransferCreateTransferV30TargetAccountDetailListTransferCapitalDetailListCapitalSubType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferCreateTransferV30TargetAccountDetailListTransferCapitalDetailListCapitalSubType', $value));
        }
        return (string) $value;
    }
}
