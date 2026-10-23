<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsCommentGetV30FilteringCommentType
{
    public const IMAGE_COMMENT_ToolsCommentGetV30FilteringCommentType = 'IMAGE_COMMENT';
    public const IMAGE_TEXT_COMMENT_ToolsCommentGetV30FilteringCommentType = 'IMAGE_TEXT_COMMENT';
    public const TEXT_COMMENT_ToolsCommentGetV30FilteringCommentType = 'TEXT_COMMENT';

    public const ALLOWED_VALUES = [
        self::IMAGE_COMMENT_ToolsCommentGetV30FilteringCommentType,
        self::IMAGE_TEXT_COMMENT_ToolsCommentGetV30FilteringCommentType,
        self::TEXT_COMMENT_ToolsCommentGetV30FilteringCommentType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsCommentGetV30FilteringCommentType', $value));
        }
        return (string) $value;
    }
}
