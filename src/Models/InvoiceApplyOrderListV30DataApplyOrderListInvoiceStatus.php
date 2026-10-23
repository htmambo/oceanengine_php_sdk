<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class InvoiceApplyOrderListV30DataApplyOrderListInvoiceStatus
{
    public const INVALID_InvoiceApplyOrderListV30DataApplyOrderListInvoiceStatus = 'INVALID';
    public const INVOICED_InvoiceApplyOrderListV30DataApplyOrderListInvoiceStatus = 'INVOICED';
    public const NOT_INVOICED_InvoiceApplyOrderListV30DataApplyOrderListInvoiceStatus = 'NOT_INVOICED';
    public const PART_INVOICED_InvoiceApplyOrderListV30DataApplyOrderListInvoiceStatus = 'PART_INVOICED';

    public const ALLOWED_VALUES = [
        self::INVALID_InvoiceApplyOrderListV30DataApplyOrderListInvoiceStatus,
        self::INVOICED_InvoiceApplyOrderListV30DataApplyOrderListInvoiceStatus,
        self::NOT_INVOICED_InvoiceApplyOrderListV30DataApplyOrderListInvoiceStatus,
        self::PART_INVOICED_InvoiceApplyOrderListV30DataApplyOrderListInvoiceStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum InvoiceApplyOrderListV30DataApplyOrderListInvoiceStatus', $value));
        }
        return (string) $value;
    }
}
