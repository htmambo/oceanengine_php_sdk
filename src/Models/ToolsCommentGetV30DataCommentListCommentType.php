<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsCommentGetV30DataCommentListCommentType
{
    public const IMAGE_COMMENT_ToolsCommentGetV30DataCommentListCommentType = 'IMAGE_COMMENT';
    public const IMAGE_TEXT_COMMENT_ToolsCommentGetV30DataCommentListCommentType = 'IMAGE_TEXT_COMMENT';
    public const TEXT_COMMENT_ToolsCommentGetV30DataCommentListCommentType = 'TEXT_COMMENT';

    public const ALLOWED_VALUES = [
        self::IMAGE_COMMENT_ToolsCommentGetV30DataCommentListCommentType,
        self::IMAGE_TEXT_COMMENT_ToolsCommentGetV30DataCommentListCommentType,
        self::TEXT_COMMENT_ToolsCommentGetV30DataCommentListCommentType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsCommentGetV30DataCommentListCommentType', $value));
        }
        return (string) $value;
    }
}
