<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsWechatAppletListV30FilteringSearchType
{
    public const CREATE_ONLY_ToolsWechatAppletListV30FilteringSearchType = 'CREATE_ONLY';
    public const SHARE_ONLY_ToolsWechatAppletListV30FilteringSearchType = 'SHARE_ONLY';

    public const ALLOWED_VALUES = [
        self::CREATE_ONLY_ToolsWechatAppletListV30FilteringSearchType,
        self::SHARE_ONLY_ToolsWechatAppletListV30FilteringSearchType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsWechatAppletListV30FilteringSearchType', $value));
        }
        return (string) $value;
    }
}
