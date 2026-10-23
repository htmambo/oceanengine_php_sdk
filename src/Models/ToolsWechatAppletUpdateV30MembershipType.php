<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsWechatAppletUpdateV30MembershipType
{
    public const ANNUAL_ToolsWechatAppletUpdateV30MembershipType = 'ANNUAL';
    public const LIFETIME_ToolsWechatAppletUpdateV30MembershipType = 'LIFETIME';
    public const MONTHLY_ToolsWechatAppletUpdateV30MembershipType = 'MONTHLY';
    public const NONE_ToolsWechatAppletUpdateV30MembershipType = 'NONE';
    public const WEEKLY_DAILY_ToolsWechatAppletUpdateV30MembershipType = 'WEEKLY_DAILY';

    public const ALLOWED_VALUES = [
        self::ANNUAL_ToolsWechatAppletUpdateV30MembershipType,
        self::LIFETIME_ToolsWechatAppletUpdateV30MembershipType,
        self::MONTHLY_ToolsWechatAppletUpdateV30MembershipType,
        self::NONE_ToolsWechatAppletUpdateV30MembershipType,
        self::WEEKLY_DAILY_ToolsWechatAppletUpdateV30MembershipType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsWechatAppletUpdateV30MembershipType', $value));
        }
        return (string) $value;
    }
}
