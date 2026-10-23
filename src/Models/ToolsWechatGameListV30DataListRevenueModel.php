<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsWechatGameListV30DataListRevenueModel
{
    public const IAA_ToolsWechatGameListV30DataListRevenueModel = 'IAA';
    public const IAAP_ToolsWechatGameListV30DataListRevenueModel = 'IAAP';
    public const IAP_ToolsWechatGameListV30DataListRevenueModel = 'IAP';

    public const ALLOWED_VALUES = [
        self::IAA_ToolsWechatGameListV30DataListRevenueModel,
        self::IAAP_ToolsWechatGameListV30DataListRevenueModel,
        self::IAP_ToolsWechatGameListV30DataListRevenueModel,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsWechatGameListV30DataListRevenueModel', $value));
        }
        return (string) $value;
    }
}
