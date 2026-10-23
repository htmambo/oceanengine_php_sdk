<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferQueryTransferDetailV30DataTransferTargetRecordListTransferCapitalRecordListCapitalSubDetailListCapitalSubType
{
    public const NORMAL_CgTransferQueryTransferDetailV30DataTransferTargetRecordListTransferCapitalRecordListCapitalSubDetailListCapitalSubType = 'NORMAL';
    public const PRELOAN_CgTransferQueryTransferDetailV30DataTransferTargetRecordListTransferCapitalRecordListCapitalSubDetailListCapitalSubType = 'PRELOAN';

    public const ALLOWED_VALUES = [
        self::NORMAL_CgTransferQueryTransferDetailV30DataTransferTargetRecordListTransferCapitalRecordListCapitalSubDetailListCapitalSubType,
        self::PRELOAN_CgTransferQueryTransferDetailV30DataTransferTargetRecordListTransferCapitalRecordListCapitalSubDetailListCapitalSubType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferQueryTransferDetailV30DataTransferTargetRecordListTransferCapitalRecordListCapitalSubDetailListCapitalSubType', $value));
        }
        return (string) $value;
    }
}
