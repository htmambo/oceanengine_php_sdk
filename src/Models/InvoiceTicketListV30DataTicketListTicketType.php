<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class InvoiceTicketListV30DataTicketListTicketType
{
    public const BIDDING_InvoiceTicketListV30DataTicketListTicketType = 'BIDDING';
    public const BID_DEDUCT_InvoiceTicketListV30DataTicketListTicketType = 'BID_DEDUCT';
    public const BID_PROGRAM_InvoiceTicketListV30DataTicketListTicketType = 'BID_PROGRAM';
    public const BRAND_BIDDING_InvoiceTicketListV30DataTicketListTicketType = 'BRAND_BIDDING';
    public const BRAND_DEDUCT_InvoiceTicketListV30DataTicketListTicketType = 'BRAND_DEDUCT';
    public const BRAND_PROGRAM_InvoiceTicketListV30DataTicketListTicketType = 'BRAND_PROGRAM';
    public const CHANGE_SIGN_InvoiceTicketListV30DataTicketListTicketType = 'CHANGE_SIGN';
    public const ECP_TICKET_InvoiceTicketListV30DataTicketListTicketType = 'ECP_TICKET';
    public const PINPAI_InvoiceTicketListV30DataTicketListTicketType = 'PINPAI';
    public const PROGRAM_InvoiceTicketListV30DataTicketListTicketType = 'PROGRAM';

    public const ALLOWED_VALUES = [
        self::BIDDING_InvoiceTicketListV30DataTicketListTicketType,
        self::BID_DEDUCT_InvoiceTicketListV30DataTicketListTicketType,
        self::BID_PROGRAM_InvoiceTicketListV30DataTicketListTicketType,
        self::BRAND_BIDDING_InvoiceTicketListV30DataTicketListTicketType,
        self::BRAND_DEDUCT_InvoiceTicketListV30DataTicketListTicketType,
        self::BRAND_PROGRAM_InvoiceTicketListV30DataTicketListTicketType,
        self::CHANGE_SIGN_InvoiceTicketListV30DataTicketListTicketType,
        self::ECP_TICKET_InvoiceTicketListV30DataTicketListTicketType,
        self::PINPAI_InvoiceTicketListV30DataTicketListTicketType,
        self::PROGRAM_InvoiceTicketListV30DataTicketListTicketType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum InvoiceTicketListV30DataTicketListTicketType', $value));
        }
        return (string) $value;
    }
}
