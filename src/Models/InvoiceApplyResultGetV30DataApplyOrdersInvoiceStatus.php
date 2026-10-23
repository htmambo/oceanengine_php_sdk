<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class InvoiceApplyResultGetV30DataApplyOrdersInvoiceStatus
{
    public const INVALID_InvoiceApplyResultGetV30DataApplyOrdersInvoiceStatus = 'INVALID';
    public const INVOICED_InvoiceApplyResultGetV30DataApplyOrdersInvoiceStatus = 'INVOICED';
    public const NOT_INVOICED_InvoiceApplyResultGetV30DataApplyOrdersInvoiceStatus = 'NOT_INVOICED';
    public const PART_INVOICED_InvoiceApplyResultGetV30DataApplyOrdersInvoiceStatus = 'PART_INVOICED';

    public const ALLOWED_VALUES = [
        self::INVALID_InvoiceApplyResultGetV30DataApplyOrdersInvoiceStatus,
        self::INVOICED_InvoiceApplyResultGetV30DataApplyOrdersInvoiceStatus,
        self::NOT_INVOICED_InvoiceApplyResultGetV30DataApplyOrdersInvoiceStatus,
        self::PART_INVOICED_InvoiceApplyResultGetV30DataApplyOrdersInvoiceStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum InvoiceApplyResultGetV30DataApplyOrdersInvoiceStatus', $value));
        }
        return (string) $value;
    }
}
