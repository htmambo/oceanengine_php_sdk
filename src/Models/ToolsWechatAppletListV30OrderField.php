<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsWechatAppletListV30OrderField
{
    public const CREATE_TIME_ToolsWechatAppletListV30OrderField = 'create_time';
    public const MODIFY_TIME_ToolsWechatAppletListV30OrderField = 'modify_time';

    public const ALLOWED_VALUES = [
        self::CREATE_TIME_ToolsWechatAppletListV30OrderField,
        self::MODIFY_TIME_ToolsWechatAppletListV30OrderField,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsWechatAppletListV30OrderField', $value));
        }
        return (string) $value;
    }
}
