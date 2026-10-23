<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsWechatGameCreateV30RevenueModel
{
    public const IAA_ToolsWechatGameCreateV30RevenueModel = 'IAA';
    public const IAAP_ToolsWechatGameCreateV30RevenueModel = 'IAAP';
    public const IAP_ToolsWechatGameCreateV30RevenueModel = 'IAP';

    public const ALLOWED_VALUES = [
        self::IAA_ToolsWechatGameCreateV30RevenueModel,
        self::IAAP_ToolsWechatGameCreateV30RevenueModel,
        self::IAP_ToolsWechatGameCreateV30RevenueModel,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsWechatGameCreateV30RevenueModel', $value));
        }
        return (string) $value;
    }
}
