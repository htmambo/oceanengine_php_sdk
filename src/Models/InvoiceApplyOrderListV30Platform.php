<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class InvoiceApplyOrderListV30Platform
{
    public const AD_InvoiceApplyOrderListV30Platform = 'AD';
    public const NATIVE_LIFE_AD_InvoiceApplyOrderListV30Platform = 'NATIVE_LIFE_AD';
    public const QC_InvoiceApplyOrderListV30Platform = 'QC';

    public const ALLOWED_VALUES = [
        self::AD_InvoiceApplyOrderListV30Platform,
        self::NATIVE_LIFE_AD_InvoiceApplyOrderListV30Platform,
        self::QC_InvoiceApplyOrderListV30Platform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum InvoiceApplyOrderListV30Platform', $value));
        }
        return (string) $value;
    }
}
