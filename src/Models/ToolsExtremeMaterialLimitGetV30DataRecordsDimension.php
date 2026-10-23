<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsExtremeMaterialLimitGetV30DataRecordsDimension
{
    public const COMPANY_ToolsExtremeMaterialLimitGetV30DataRecordsDimension = 'COMPANY';
    public const GROUP_ToolsExtremeMaterialLimitGetV30DataRecordsDimension = 'GROUP';

    public const ALLOWED_VALUES = [
        self::COMPANY_ToolsExtremeMaterialLimitGetV30DataRecordsDimension,
        self::GROUP_ToolsExtremeMaterialLimitGetV30DataRecordsDimension,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsExtremeMaterialLimitGetV30DataRecordsDimension', $value));
        }
        return (string) $value;
    }
}
