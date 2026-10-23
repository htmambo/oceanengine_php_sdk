<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsWechatAppletCreateV30RevenueModel
{
    public const IAA_ToolsWechatAppletCreateV30RevenueModel = 'IAA';
    public const IAAP_ToolsWechatAppletCreateV30RevenueModel = 'IAAP';
    public const IAP_ToolsWechatAppletCreateV30RevenueModel = 'IAP';

    public const ALLOWED_VALUES = [
        self::IAA_ToolsWechatAppletCreateV30RevenueModel,
        self::IAAP_ToolsWechatAppletCreateV30RevenueModel,
        self::IAP_ToolsWechatAppletCreateV30RevenueModel,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsWechatAppletCreateV30RevenueModel', $value));
        }
        return (string) $value;
    }
}
