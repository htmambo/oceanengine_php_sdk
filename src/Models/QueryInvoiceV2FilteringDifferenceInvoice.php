<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QueryInvoiceV2FilteringDifferenceInvoice
{
    public const FULL_QueryInvoiceV2FilteringDifferenceInvoice = 'FULL';
    public const DIFF_QueryInvoiceV2FilteringDifferenceInvoice = 'DIFF';

    public const ALLOWED_VALUES = [
        self::FULL_QueryInvoiceV2FilteringDifferenceInvoice,
        self::DIFF_QueryInvoiceV2FilteringDifferenceInvoice,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QueryInvoiceV2FilteringDifferenceInvoice', $value));
        }
        return (string) $value;
    }
}
