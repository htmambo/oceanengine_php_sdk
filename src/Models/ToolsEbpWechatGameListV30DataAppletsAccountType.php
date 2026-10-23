<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpWechatGameListV30DataAppletsAccountType
{
    public const AD_ToolsEbpWechatGameListV30DataAppletsAccountType = 'AD';
    public const BP_ToolsEbpWechatGameListV30DataAppletsAccountType = 'BP';
    public const STAR_ToolsEbpWechatGameListV30DataAppletsAccountType = 'STAR';

    public const ALLOWED_VALUES = [
        self::AD_ToolsEbpWechatGameListV30DataAppletsAccountType,
        self::BP_ToolsEbpWechatGameListV30DataAppletsAccountType,
        self::STAR_ToolsEbpWechatGameListV30DataAppletsAccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpWechatGameListV30DataAppletsAccountType', $value));
        }
        return (string) $value;
    }
}
