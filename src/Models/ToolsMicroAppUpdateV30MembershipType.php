<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsMicroAppUpdateV30MembershipType
{
    public const ANNUAL_ToolsMicroAppUpdateV30MembershipType = 'ANNUAL';
    public const LIFETIME_ToolsMicroAppUpdateV30MembershipType = 'LIFETIME';
    public const MONTHLY_ToolsMicroAppUpdateV30MembershipType = 'MONTHLY';
    public const NONE_ToolsMicroAppUpdateV30MembershipType = 'NONE';
    public const WEEKLY_DAILY_ToolsMicroAppUpdateV30MembershipType = 'WEEKLY_DAILY';

    public const ALLOWED_VALUES = [
        self::ANNUAL_ToolsMicroAppUpdateV30MembershipType,
        self::LIFETIME_ToolsMicroAppUpdateV30MembershipType,
        self::MONTHLY_ToolsMicroAppUpdateV30MembershipType,
        self::NONE_ToolsMicroAppUpdateV30MembershipType,
        self::WEEKLY_DAILY_ToolsMicroAppUpdateV30MembershipType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsMicroAppUpdateV30MembershipType', $value));
        }
        return (string) $value;
    }
}
