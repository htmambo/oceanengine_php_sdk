<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class InvoiceApplyOrderListV30InvoiceDirections
{
    public const BLUE_InvoiceApplyOrderListV30InvoiceDirections = 'BLUE';
    public const RED_InvoiceApplyOrderListV30InvoiceDirections = 'RED';

    public const ALLOWED_VALUES = [
        self::BLUE_InvoiceApplyOrderListV30InvoiceDirections,
        self::RED_InvoiceApplyOrderListV30InvoiceDirections,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum InvoiceApplyOrderListV30InvoiceDirections', $value));
        }
        return (string) $value;
    }
}
