<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsWechatGameListV30AccountType
{
    public const BP_ToolsWechatGameListV30AccountType = 'BP';
    public const AD_ToolsWechatGameListV30AccountType = 'AD';
    public const EBP_ToolsWechatGameListV30AccountType = 'EBP';

    public const ALLOWED_VALUES = [
        self::BP_ToolsWechatGameListV30AccountType,
        self::AD_ToolsWechatGameListV30AccountType,
        self::EBP_ToolsWechatGameListV30AccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsWechatGameListV30AccountType', $value));
        }
        return (string) $value;
    }
}
