<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsCommentGetV30OrderField
{
    public const CREATE_TIME_ToolsCommentGetV30OrderField = 'CREATE_TIME';
    public const LIKE_COUNT_ToolsCommentGetV30OrderField = 'LIKE_COUNT';
    public const REPLY_COUNT_ToolsCommentGetV30OrderField = 'REPLY_COUNT';

    public const ALLOWED_VALUES = [
        self::CREATE_TIME_ToolsCommentGetV30OrderField,
        self::LIKE_COUNT_ToolsCommentGetV30OrderField,
        self::REPLY_COUNT_ToolsCommentGetV30OrderField,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsCommentGetV30OrderField', $value));
        }
        return (string) $value;
    }
}
