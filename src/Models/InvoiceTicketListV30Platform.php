<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class InvoiceTicketListV30Platform
{
    public const AD_InvoiceTicketListV30Platform = 'AD';
    public const NATIVE_LIFE_AD_InvoiceTicketListV30Platform = 'NATIVE_LIFE_AD';
    public const QC_InvoiceTicketListV30Platform = 'QC';

    public const ALLOWED_VALUES = [
        self::AD_InvoiceTicketListV30Platform,
        self::NATIVE_LIFE_AD_InvoiceTicketListV30Platform,
        self::QC_InvoiceTicketListV30Platform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum InvoiceTicketListV30Platform', $value));
        }
        return (string) $value;
    }
}
