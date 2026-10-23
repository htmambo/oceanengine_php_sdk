<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class InvoiceApplyOrderListV30DataApplyOrderListInvoiceType
{
    public const ALL_E_GENERAL_InvoiceApplyOrderListV30DataApplyOrderListInvoiceType = 'ALL_E_GENERAL';
    public const ALL_E_SPECIAL_InvoiceApplyOrderListV30DataApplyOrderListInvoiceType = 'ALL_E_SPECIAL';

    public const ALLOWED_VALUES = [
        self::ALL_E_GENERAL_InvoiceApplyOrderListV30DataApplyOrderListInvoiceType,
        self::ALL_E_SPECIAL_InvoiceApplyOrderListV30DataApplyOrderListInvoiceType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum InvoiceApplyOrderListV30DataApplyOrderListInvoiceType', $value));
        }
        return (string) $value;
    }
}
