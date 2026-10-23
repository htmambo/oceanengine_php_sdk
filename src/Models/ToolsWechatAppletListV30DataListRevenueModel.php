<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsWechatAppletListV30DataListRevenueModel
{
    public const IAA_ToolsWechatAppletListV30DataListRevenueModel = 'IAA';
    public const IAAP_ToolsWechatAppletListV30DataListRevenueModel = 'IAAP';
    public const IAP_ToolsWechatAppletListV30DataListRevenueModel = 'IAP';

    public const ALLOWED_VALUES = [
        self::IAA_ToolsWechatAppletListV30DataListRevenueModel,
        self::IAAP_ToolsWechatAppletListV30DataListRevenueModel,
        self::IAP_ToolsWechatAppletListV30DataListRevenueModel,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsWechatAppletListV30DataListRevenueModel', $value));
        }
        return (string) $value;
    }
}
