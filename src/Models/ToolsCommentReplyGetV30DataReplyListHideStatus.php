<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsCommentReplyGetV30DataReplyListHideStatus
{
    public const ALL_ToolsCommentReplyGetV30DataReplyListHideStatus = 'ALL';
    public const HIDE_ToolsCommentReplyGetV30DataReplyListHideStatus = 'HIDE';
    public const NOT_HIDE_ToolsCommentReplyGetV30DataReplyListHideStatus = 'NOT_HIDE';

    public const ALLOWED_VALUES = [
        self::ALL_ToolsCommentReplyGetV30DataReplyListHideStatus,
        self::HIDE_ToolsCommentReplyGetV30DataReplyListHideStatus,
        self::NOT_HIDE_ToolsCommentReplyGetV30DataReplyListHideStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsCommentReplyGetV30DataReplyListHideStatus', $value));
        }
        return (string) $value;
    }
}
