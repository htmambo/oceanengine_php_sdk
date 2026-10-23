<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpAppUpdateV30MembershipType
{
    public const ANNUAL_ToolsEbpAppUpdateV30MembershipType = 'ANNUAL';
    public const LIFETIME_ToolsEbpAppUpdateV30MembershipType = 'LIFETIME';
    public const MONTHLY_ToolsEbpAppUpdateV30MembershipType = 'MONTHLY';
    public const NONE_ToolsEbpAppUpdateV30MembershipType = 'NONE';
    public const WEEKLY_DAILY_ToolsEbpAppUpdateV30MembershipType = 'WEEKLY_DAILY';

    public const ALLOWED_VALUES = [
        self::ANNUAL_ToolsEbpAppUpdateV30MembershipType,
        self::LIFETIME_ToolsEbpAppUpdateV30MembershipType,
        self::MONTHLY_ToolsEbpAppUpdateV30MembershipType,
        self::NONE_ToolsEbpAppUpdateV30MembershipType,
        self::WEEKLY_DAILY_ToolsEbpAppUpdateV30MembershipType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpAppUpdateV30MembershipType', $value));
        }
        return (string) $value;
    }
}
