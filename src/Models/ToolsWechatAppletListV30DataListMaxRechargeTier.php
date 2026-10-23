<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsWechatAppletListV30DataListMaxRechargeTier
{
    public const ABOVE_200_ToolsWechatAppletListV30DataListMaxRechargeTier = 'ABOVE_200';
    public const FROM_100_TO_200_ToolsWechatAppletListV30DataListMaxRechargeTier = 'FROM_100_TO_200';
    public const FROM_FIFTY_TO_HUNDRED_ToolsWechatAppletListV30DataListMaxRechargeTier = 'FROM_FIFTY_TO_HUNDRED';
    public const FROM_ONE_TO_FIFTY_ToolsWechatAppletListV30DataListMaxRechargeTier = 'FROM_ONE_TO_FIFTY';

    public const ALLOWED_VALUES = [
        self::ABOVE_200_ToolsWechatAppletListV30DataListMaxRechargeTier,
        self::FROM_100_TO_200_ToolsWechatAppletListV30DataListMaxRechargeTier,
        self::FROM_FIFTY_TO_HUNDRED_ToolsWechatAppletListV30DataListMaxRechargeTier,
        self::FROM_ONE_TO_FIFTY_ToolsWechatAppletListV30DataListMaxRechargeTier,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsWechatAppletListV30DataListMaxRechargeTier', $value));
        }
        return (string) $value;
    }
}
