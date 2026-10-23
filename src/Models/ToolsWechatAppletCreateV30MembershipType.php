<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsWechatAppletCreateV30MembershipType
{
    public const ANNUAL_ToolsWechatAppletCreateV30MembershipType = 'ANNUAL';
    public const LIFETIME_ToolsWechatAppletCreateV30MembershipType = 'LIFETIME';
    public const MONTHLY_ToolsWechatAppletCreateV30MembershipType = 'MONTHLY';
    public const NONE_ToolsWechatAppletCreateV30MembershipType = 'NONE';
    public const WEEKLY_DAILY_ToolsWechatAppletCreateV30MembershipType = 'WEEKLY_DAILY';

    public const ALLOWED_VALUES = [
        self::ANNUAL_ToolsWechatAppletCreateV30MembershipType,
        self::LIFETIME_ToolsWechatAppletCreateV30MembershipType,
        self::MONTHLY_ToolsWechatAppletCreateV30MembershipType,
        self::NONE_ToolsWechatAppletCreateV30MembershipType,
        self::WEEKLY_DAILY_ToolsWechatAppletCreateV30MembershipType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsWechatAppletCreateV30MembershipType', $value));
        }
        return (string) $value;
    }
}
