<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsWechatGameListV30AccountAssetQueryScope
{
    public const ACCOCUNT_ToolsWechatGameListV30AccountAssetQueryScope = 'ACCOCUNT';
    public const ALL_ToolsWechatGameListV30AccountAssetQueryScope = 'ALL';
    public const GROUP_ToolsWechatGameListV30AccountAssetQueryScope = 'GROUP';

    public const ALLOWED_VALUES = [
        self::ACCOCUNT_ToolsWechatGameListV30AccountAssetQueryScope,
        self::ALL_ToolsWechatGameListV30AccountAssetQueryScope,
        self::GROUP_ToolsWechatGameListV30AccountAssetQueryScope,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsWechatGameListV30AccountAssetQueryScope', $value));
        }
        return (string) $value;
    }
}
