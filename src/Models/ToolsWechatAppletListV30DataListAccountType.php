<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsWechatAppletListV30DataListAccountType
{
    public const AD_ToolsWechatAppletListV30DataListAccountType = 'AD';
    public const BP_ToolsWechatAppletListV30DataListAccountType = 'BP';
    public const STAR_ToolsWechatAppletListV30DataListAccountType = 'STAR';

    public const ALLOWED_VALUES = [
        self::AD_ToolsWechatAppletListV30DataListAccountType,
        self::BP_ToolsWechatAppletListV30DataListAccountType,
        self::STAR_ToolsWechatAppletListV30DataListAccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsWechatAppletListV30DataListAccountType', $value));
        }
        return (string) $value;
    }
}
