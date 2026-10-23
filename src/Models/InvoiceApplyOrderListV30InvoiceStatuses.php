<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class InvoiceApplyOrderListV30InvoiceStatuses
{
    public const INVALID_InvoiceApplyOrderListV30InvoiceStatuses = 'INVALID';
    public const INVOICED_InvoiceApplyOrderListV30InvoiceStatuses = 'INVOICED';
    public const NOT_INVOICED_InvoiceApplyOrderListV30InvoiceStatuses = 'NOT_INVOICED';
    public const PART_INVOICED_InvoiceApplyOrderListV30InvoiceStatuses = 'PART_INVOICED';

    public const ALLOWED_VALUES = [
        self::INVALID_InvoiceApplyOrderListV30InvoiceStatuses,
        self::INVOICED_InvoiceApplyOrderListV30InvoiceStatuses,
        self::NOT_INVOICED_InvoiceApplyOrderListV30InvoiceStatuses,
        self::PART_INVOICED_InvoiceApplyOrderListV30InvoiceStatuses,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum InvoiceApplyOrderListV30InvoiceStatuses', $value));
        }
        return (string) $value;
    }
}
