<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class InvoiceApplyOrderListV30DataApplyOrderListReverseStatus
{
    public const FULL_REVERSE_InvoiceApplyOrderListV30DataApplyOrderListReverseStatus = 'FULL_REVERSE';
    public const NORMAL_InvoiceApplyOrderListV30DataApplyOrderListReverseStatus = 'NORMAL';
    public const PART_REVERSE_InvoiceApplyOrderListV30DataApplyOrderListReverseStatus = 'PART_REVERSE';

    public const ALLOWED_VALUES = [
        self::FULL_REVERSE_InvoiceApplyOrderListV30DataApplyOrderListReverseStatus,
        self::NORMAL_InvoiceApplyOrderListV30DataApplyOrderListReverseStatus,
        self::PART_REVERSE_InvoiceApplyOrderListV30DataApplyOrderListReverseStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum InvoiceApplyOrderListV30DataApplyOrderListReverseStatus', $value));
        }
        return (string) $value;
    }
}
