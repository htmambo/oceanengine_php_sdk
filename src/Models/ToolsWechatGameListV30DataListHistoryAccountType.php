<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsWechatGameListV30DataListHistoryAccountType
{
    public const AD_ToolsWechatGameListV30DataListHistoryAccountType = 'AD';
    public const BP_ToolsWechatGameListV30DataListHistoryAccountType = 'BP';
    public const STAR_ToolsWechatGameListV30DataListHistoryAccountType = 'STAR';

    public const ALLOWED_VALUES = [
        self::AD_ToolsWechatGameListV30DataListHistoryAccountType,
        self::BP_ToolsWechatGameListV30DataListHistoryAccountType,
        self::STAR_ToolsWechatGameListV30DataListHistoryAccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsWechatGameListV30DataListHistoryAccountType', $value));
        }
        return (string) $value;
    }
}
