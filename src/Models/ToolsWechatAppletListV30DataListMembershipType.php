<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsWechatAppletListV30DataListMembershipType
{
    public const ANNUAL_ToolsWechatAppletListV30DataListMembershipType = 'ANNUAL';
    public const LIFETIME_ToolsWechatAppletListV30DataListMembershipType = 'LIFETIME';
    public const MONTHLY_ToolsWechatAppletListV30DataListMembershipType = 'MONTHLY';
    public const NONE_ToolsWechatAppletListV30DataListMembershipType = 'NONE';
    public const WEEKLY_DAILY_ToolsWechatAppletListV30DataListMembershipType = 'WEEKLY_DAILY';

    public const ALLOWED_VALUES = [
        self::ANNUAL_ToolsWechatAppletListV30DataListMembershipType,
        self::LIFETIME_ToolsWechatAppletListV30DataListMembershipType,
        self::MONTHLY_ToolsWechatAppletListV30DataListMembershipType,
        self::NONE_ToolsWechatAppletListV30DataListMembershipType,
        self::WEEKLY_DAILY_ToolsWechatAppletListV30DataListMembershipType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsWechatAppletListV30DataListMembershipType', $value));
        }
        return (string) $value;
    }
}
