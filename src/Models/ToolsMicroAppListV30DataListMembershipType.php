<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsMicroAppListV30DataListMembershipType
{
    public const ANNUAL_ToolsMicroAppListV30DataListMembershipType = 'ANNUAL';
    public const LIFETIME_ToolsMicroAppListV30DataListMembershipType = 'LIFETIME';
    public const MONTHLY_ToolsMicroAppListV30DataListMembershipType = 'MONTHLY';
    public const NONE_ToolsMicroAppListV30DataListMembershipType = 'NONE';
    public const WEEKLY_DAILY_ToolsMicroAppListV30DataListMembershipType = 'WEEKLY_DAILY';

    public const ALLOWED_VALUES = [
        self::ANNUAL_ToolsMicroAppListV30DataListMembershipType,
        self::LIFETIME_ToolsMicroAppListV30DataListMembershipType,
        self::MONTHLY_ToolsMicroAppListV30DataListMembershipType,
        self::NONE_ToolsMicroAppListV30DataListMembershipType,
        self::WEEKLY_DAILY_ToolsMicroAppListV30DataListMembershipType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsMicroAppListV30DataListMembershipType', $value));
        }
        return (string) $value;
    }
}
