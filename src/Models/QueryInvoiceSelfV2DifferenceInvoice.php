<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QueryInvoiceSelfV2DifferenceInvoice
{
    public const FULL_QueryInvoiceSelfV2DifferenceInvoice = 'FULL';
    public const DIFF_QueryInvoiceSelfV2DifferenceInvoice = 'DIFF';

    public const ALLOWED_VALUES = [
        self::FULL_QueryInvoiceSelfV2DifferenceInvoice,
        self::DIFF_QueryInvoiceSelfV2DifferenceInvoice,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QueryInvoiceSelfV2DifferenceInvoice', $value));
        }
        return (string) $value;
    }
}
