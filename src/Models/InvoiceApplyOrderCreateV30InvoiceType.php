<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class InvoiceApplyOrderCreateV30InvoiceType
{
    public const ALL_E_GENERAL_InvoiceApplyOrderCreateV30InvoiceType = 'ALL_E_GENERAL';
    public const ALL_E_SPECIAL_InvoiceApplyOrderCreateV30InvoiceType = 'ALL_E_SPECIAL';

    public const ALLOWED_VALUES = [
        self::ALL_E_GENERAL_InvoiceApplyOrderCreateV30InvoiceType,
        self::ALL_E_SPECIAL_InvoiceApplyOrderCreateV30InvoiceType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum InvoiceApplyOrderCreateV30InvoiceType', $value));
        }
        return (string) $value;
    }
}
