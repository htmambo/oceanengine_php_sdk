<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class InvoiceTicketListV30TicketStatuses
{
    public const INVOICED_InvoiceTicketListV30TicketStatuses = 'INVOICED';
    public const NOT_INVOICED_InvoiceTicketListV30TicketStatuses = 'NOT_INVOICED';
    public const PART_INVOICED_InvoiceTicketListV30TicketStatuses = 'PART_INVOICED';

    public const ALLOWED_VALUES = [
        self::INVOICED_InvoiceTicketListV30TicketStatuses,
        self::NOT_INVOICED_InvoiceTicketListV30TicketStatuses,
        self::PART_INVOICED_InvoiceTicketListV30TicketStatuses,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum InvoiceTicketListV30TicketStatuses', $value));
        }
        return (string) $value;
    }
}
