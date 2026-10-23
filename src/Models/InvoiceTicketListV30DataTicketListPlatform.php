<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class InvoiceTicketListV30DataTicketListPlatform
{
    public const AD_InvoiceTicketListV30DataTicketListPlatform = 'AD';
    public const NATIVE_LIFE_AD_InvoiceTicketListV30DataTicketListPlatform = 'NATIVE_LIFE_AD';
    public const QC_InvoiceTicketListV30DataTicketListPlatform = 'QC';

    public const ALLOWED_VALUES = [
        self::AD_InvoiceTicketListV30DataTicketListPlatform,
        self::NATIVE_LIFE_AD_InvoiceTicketListV30DataTicketListPlatform,
        self::QC_InvoiceTicketListV30DataTicketListPlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum InvoiceTicketListV30DataTicketListPlatform', $value));
        }
        return (string) $value;
    }
}
