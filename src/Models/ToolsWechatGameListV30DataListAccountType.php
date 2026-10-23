<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsWechatGameListV30DataListAccountType
{
    public const AD_ToolsWechatGameListV30DataListAccountType = 'AD';
    public const BP_ToolsWechatGameListV30DataListAccountType = 'BP';

    public const ALLOWED_VALUES = [
        self::AD_ToolsWechatGameListV30DataListAccountType,
        self::BP_ToolsWechatGameListV30DataListAccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsWechatGameListV30DataListAccountType', $value));
        }
        return (string) $value;
    }
}
