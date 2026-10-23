<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsCommentGetV30DataCommentListHideStatus
{
    public const ALL_ToolsCommentGetV30DataCommentListHideStatus = 'ALL';
    public const HIDE_ToolsCommentGetV30DataCommentListHideStatus = 'HIDE';
    public const NOT_HIDE_ToolsCommentGetV30DataCommentListHideStatus = 'NOT_HIDE';

    public const ALLOWED_VALUES = [
        self::ALL_ToolsCommentGetV30DataCommentListHideStatus,
        self::HIDE_ToolsCommentGetV30DataCommentListHideStatus,
        self::NOT_HIDE_ToolsCommentGetV30DataCommentListHideStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsCommentGetV30DataCommentListHideStatus', $value));
        }
        return (string) $value;
    }
}
