<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class InvoiceApplyOrderCreateV30Platform
{
    public const AD_InvoiceApplyOrderCreateV30Platform = 'AD';
    public const NATIVE_LIFE_AD_InvoiceApplyOrderCreateV30Platform = 'NATIVE_LIFE_AD';
    public const QC_InvoiceApplyOrderCreateV30Platform = 'QC';

    public const ALLOWED_VALUES = [
        self::AD_InvoiceApplyOrderCreateV30Platform,
        self::NATIVE_LIFE_AD_InvoiceApplyOrderCreateV30Platform,
        self::QC_InvoiceApplyOrderCreateV30Platform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum InvoiceApplyOrderCreateV30Platform', $value));
        }
        return (string) $value;
    }
}
