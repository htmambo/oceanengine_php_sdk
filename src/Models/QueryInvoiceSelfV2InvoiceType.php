<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QueryInvoiceSelfV2InvoiceType
{
    public const GENERAL_QueryInvoiceSelfV2InvoiceType = 'GENERAL';
    public const SPECIAL_QueryInvoiceSelfV2InvoiceType = 'SPECIAL';
    public const E_GENERAL_QueryInvoiceSelfV2InvoiceType = 'E_GENERAL';
    public const E_SPECIAL_QueryInvoiceSelfV2InvoiceType = 'E_SPECIAL';
    public const ALL_E_GENERAL_QueryInvoiceSelfV2InvoiceType = 'ALL_E_GENERAL';
    public const ALL_E_SPECIAL_QueryInvoiceSelfV2InvoiceType = 'ALL_E_SPECIAL';

    public const ALLOWED_VALUES = [
        self::GENERAL_QueryInvoiceSelfV2InvoiceType,
        self::SPECIAL_QueryInvoiceSelfV2InvoiceType,
        self::E_GENERAL_QueryInvoiceSelfV2InvoiceType,
        self::E_SPECIAL_QueryInvoiceSelfV2InvoiceType,
        self::ALL_E_GENERAL_QueryInvoiceSelfV2InvoiceType,
        self::ALL_E_SPECIAL_QueryInvoiceSelfV2InvoiceType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QueryInvoiceSelfV2InvoiceType', $value));
        }
        return (string) $value;
    }
}
