<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CreateProjectInvoiceV2InvoiceType
{
    public const GENERAL_CreateProjectInvoiceV2InvoiceType = 'GENERAL';
    public const SPECIAL_CreateProjectInvoiceV2InvoiceType = 'SPECIAL';
    public const E_GENERAL_CreateProjectInvoiceV2InvoiceType = 'E_GENERAL';
    public const E_SPECIAL_CreateProjectInvoiceV2InvoiceType = 'E_SPECIAL';
    public const ALL_E_GENERAL_CreateProjectInvoiceV2InvoiceType = 'ALL_E_GENERAL';
    public const ALL_E_SPECIAL_CreateProjectInvoiceV2InvoiceType = 'ALL_E_SPECIAL';

    public const ALLOWED_VALUES = [
        self::GENERAL_CreateProjectInvoiceV2InvoiceType,
        self::SPECIAL_CreateProjectInvoiceV2InvoiceType,
        self::E_GENERAL_CreateProjectInvoiceV2InvoiceType,
        self::E_SPECIAL_CreateProjectInvoiceV2InvoiceType,
        self::ALL_E_GENERAL_CreateProjectInvoiceV2InvoiceType,
        self::ALL_E_SPECIAL_CreateProjectInvoiceV2InvoiceType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CreateProjectInvoiceV2InvoiceType', $value));
        }
        return (string) $value;
    }
}
