<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QueryInvoiceV2FilteringInvoiceType
{
    public const GENERAL_QueryInvoiceV2FilteringInvoiceType = 'GENERAL';
    public const SPECIAL_QueryInvoiceV2FilteringInvoiceType = 'SPECIAL';
    public const E_GENERAL_QueryInvoiceV2FilteringInvoiceType = 'E_GENERAL';
    public const E_SPECIAL_QueryInvoiceV2FilteringInvoiceType = 'E_SPECIAL';
    public const ALL_E_GENERAL_QueryInvoiceV2FilteringInvoiceType = 'ALL_E_GENERAL';
    public const ALL_E_SPECIAL_QueryInvoiceV2FilteringInvoiceType = 'ALL_E_SPECIAL';

    public const ALLOWED_VALUES = [
        self::GENERAL_QueryInvoiceV2FilteringInvoiceType,
        self::SPECIAL_QueryInvoiceV2FilteringInvoiceType,
        self::E_GENERAL_QueryInvoiceV2FilteringInvoiceType,
        self::E_SPECIAL_QueryInvoiceV2FilteringInvoiceType,
        self::ALL_E_GENERAL_QueryInvoiceV2FilteringInvoiceType,
        self::ALL_E_SPECIAL_QueryInvoiceV2FilteringInvoiceType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QueryInvoiceV2FilteringInvoiceType', $value));
        }
        return (string) $value;
    }
}
