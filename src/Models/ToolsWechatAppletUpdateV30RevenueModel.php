<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsWechatAppletUpdateV30RevenueModel
{
    public const IAA_ToolsWechatAppletUpdateV30RevenueModel = 'IAA';
    public const IAAP_ToolsWechatAppletUpdateV30RevenueModel = 'IAAP';
    public const IAP_ToolsWechatAppletUpdateV30RevenueModel = 'IAP';

    public const ALLOWED_VALUES = [
        self::IAA_ToolsWechatAppletUpdateV30RevenueModel,
        self::IAAP_ToolsWechatAppletUpdateV30RevenueModel,
        self::IAP_ToolsWechatAppletUpdateV30RevenueModel,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsWechatAppletUpdateV30RevenueModel', $value));
        }
        return (string) $value;
    }
}
