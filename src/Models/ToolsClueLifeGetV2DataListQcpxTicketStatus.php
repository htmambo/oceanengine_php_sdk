<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsClueLifeGetV2DataListQcpxTicketStatus
{
    public const NOTICKET_ToolsClueLifeGetV2DataListQcpxTicketStatus = 'NOTICKET';
    public const HAVETICKET_ToolsClueLifeGetV2DataListQcpxTicketStatus = 'HAVETICKET';

    public const ALLOWED_VALUES = [
        self::NOTICKET_ToolsClueLifeGetV2DataListQcpxTicketStatus,
        self::HAVETICKET_ToolsClueLifeGetV2DataListQcpxTicketStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsClueLifeGetV2DataListQcpxTicketStatus', $value));
        }
        return (string) $value;
    }
}
