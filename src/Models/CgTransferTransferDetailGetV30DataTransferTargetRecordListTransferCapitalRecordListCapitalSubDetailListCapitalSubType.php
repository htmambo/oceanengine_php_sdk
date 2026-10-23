<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferCapitalRecordListCapitalSubDetailListCapitalSubType
{
    public const NORMAL_CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferCapitalRecordListCapitalSubDetailListCapitalSubType = 'NORMAL';
    public const PRELOAN_CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferCapitalRecordListCapitalSubDetailListCapitalSubType = 'PRELOAN';

    public const ALLOWED_VALUES = [
        self::NORMAL_CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferCapitalRecordListCapitalSubDetailListCapitalSubType,
        self::PRELOAN_CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferCapitalRecordListCapitalSubDetailListCapitalSubType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferCapitalRecordListCapitalSubDetailListCapitalSubType', $value));
        }
        return (string) $value;
    }
}
