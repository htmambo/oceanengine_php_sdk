<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpWechatAppletListV30DataAppletsAccountType
{
    public const AD_ToolsEbpWechatAppletListV30DataAppletsAccountType = 'AD';
    public const BP_ToolsEbpWechatAppletListV30DataAppletsAccountType = 'BP';
    public const STAR_ToolsEbpWechatAppletListV30DataAppletsAccountType = 'STAR';

    public const ALLOWED_VALUES = [
        self::AD_ToolsEbpWechatAppletListV30DataAppletsAccountType,
        self::BP_ToolsEbpWechatAppletListV30DataAppletsAccountType,
        self::STAR_ToolsEbpWechatAppletListV30DataAppletsAccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpWechatAppletListV30DataAppletsAccountType', $value));
        }
        return (string) $value;
    }
}
