<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpAppDetailV30DataCurrentVersionMembershipType
{
    public const ANNUAL_ToolsEbpAppDetailV30DataCurrentVersionMembershipType = 'ANNUAL';
    public const LIFETIME_ToolsEbpAppDetailV30DataCurrentVersionMembershipType = 'LIFETIME';
    public const MONTHLY_ToolsEbpAppDetailV30DataCurrentVersionMembershipType = 'MONTHLY';
    public const NONE_ToolsEbpAppDetailV30DataCurrentVersionMembershipType = 'NONE';
    public const WEEKLY_DAILY_ToolsEbpAppDetailV30DataCurrentVersionMembershipType = 'WEEKLY_DAILY';

    public const ALLOWED_VALUES = [
        self::ANNUAL_ToolsEbpAppDetailV30DataCurrentVersionMembershipType,
        self::LIFETIME_ToolsEbpAppDetailV30DataCurrentVersionMembershipType,
        self::MONTHLY_ToolsEbpAppDetailV30DataCurrentVersionMembershipType,
        self::NONE_ToolsEbpAppDetailV30DataCurrentVersionMembershipType,
        self::WEEKLY_DAILY_ToolsEbpAppDetailV30DataCurrentVersionMembershipType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpAppDetailV30DataCurrentVersionMembershipType', $value));
        }
        return (string) $value;
    }
}
