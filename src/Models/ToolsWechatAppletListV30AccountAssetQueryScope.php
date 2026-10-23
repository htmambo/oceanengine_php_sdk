<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsWechatAppletListV30AccountAssetQueryScope
{
    public const ACCOCUNT_ToolsWechatAppletListV30AccountAssetQueryScope = 'ACCOCUNT';
    public const ALL_ToolsWechatAppletListV30AccountAssetQueryScope = 'ALL';
    public const GROUP_ToolsWechatAppletListV30AccountAssetQueryScope = 'GROUP';

    public const ALLOWED_VALUES = [
        self::ACCOCUNT_ToolsWechatAppletListV30AccountAssetQueryScope,
        self::ALL_ToolsWechatAppletListV30AccountAssetQueryScope,
        self::GROUP_ToolsWechatAppletListV30AccountAssetQueryScope,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsWechatAppletListV30AccountAssetQueryScope', $value));
        }
        return (string) $value;
    }
}
