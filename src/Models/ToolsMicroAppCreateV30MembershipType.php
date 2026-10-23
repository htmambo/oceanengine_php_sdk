<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsMicroAppCreateV30MembershipType
{
    public const ANNUAL_ToolsMicroAppCreateV30MembershipType = 'ANNUAL';
    public const LIFETIME_ToolsMicroAppCreateV30MembershipType = 'LIFETIME';
    public const MONTHLY_ToolsMicroAppCreateV30MembershipType = 'MONTHLY';
    public const NONE_ToolsMicroAppCreateV30MembershipType = 'NONE';
    public const WEEKLY_DAILY_ToolsMicroAppCreateV30MembershipType = 'WEEKLY_DAILY';

    public const ALLOWED_VALUES = [
        self::ANNUAL_ToolsMicroAppCreateV30MembershipType,
        self::LIFETIME_ToolsMicroAppCreateV30MembershipType,
        self::MONTHLY_ToolsMicroAppCreateV30MembershipType,
        self::NONE_ToolsMicroAppCreateV30MembershipType,
        self::WEEKLY_DAILY_ToolsMicroAppCreateV30MembershipType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsMicroAppCreateV30MembershipType', $value));
        }
        return (string) $value;
    }
}
