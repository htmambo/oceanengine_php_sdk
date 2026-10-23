<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class InvoiceApplyOrderListV30ReverseStatuses
{
    public const FULL_REVERSE_InvoiceApplyOrderListV30ReverseStatuses = 'FULL_REVERSE';
    public const NORMAL_InvoiceApplyOrderListV30ReverseStatuses = 'NORMAL';
    public const PART_REVERSE_InvoiceApplyOrderListV30ReverseStatuses = 'PART_REVERSE';

    public const ALLOWED_VALUES = [
        self::FULL_REVERSE_InvoiceApplyOrderListV30ReverseStatuses,
        self::NORMAL_InvoiceApplyOrderListV30ReverseStatuses,
        self::PART_REVERSE_InvoiceApplyOrderListV30ReverseStatuses,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum InvoiceApplyOrderListV30ReverseStatuses', $value));
        }
        return (string) $value;
    }
}
