<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpAppDetailV30DataNextVersionMembershipType
{
    public const ANNUAL_ToolsEbpAppDetailV30DataNextVersionMembershipType = 'ANNUAL';
    public const LIFETIME_ToolsEbpAppDetailV30DataNextVersionMembershipType = 'LIFETIME';
    public const MONTHLY_ToolsEbpAppDetailV30DataNextVersionMembershipType = 'MONTHLY';
    public const NONE_ToolsEbpAppDetailV30DataNextVersionMembershipType = 'NONE';
    public const WEEKLY_DAILY_ToolsEbpAppDetailV30DataNextVersionMembershipType = 'WEEKLY_DAILY';

    public const ALLOWED_VALUES = [
        self::ANNUAL_ToolsEbpAppDetailV30DataNextVersionMembershipType,
        self::LIFETIME_ToolsEbpAppDetailV30DataNextVersionMembershipType,
        self::MONTHLY_ToolsEbpAppDetailV30DataNextVersionMembershipType,
        self::NONE_ToolsEbpAppDetailV30DataNextVersionMembershipType,
        self::WEEKLY_DAILY_ToolsEbpAppDetailV30DataNextVersionMembershipType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpAppDetailV30DataNextVersionMembershipType', $value));
        }
        return (string) $value;
    }
}
