<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsCommentGetV30FilteringHideStatus
{
    public const ALL_ToolsCommentGetV30FilteringHideStatus = 'ALL';
    public const HIDE_ToolsCommentGetV30FilteringHideStatus = 'HIDE';
    public const NOT_HIDE_ToolsCommentGetV30FilteringHideStatus = 'NOT_HIDE';

    public const ALLOWED_VALUES = [
        self::ALL_ToolsCommentGetV30FilteringHideStatus,
        self::HIDE_ToolsCommentGetV30FilteringHideStatus,
        self::NOT_HIDE_ToolsCommentGetV30FilteringHideStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsCommentGetV30FilteringHideStatus', $value));
        }
        return (string) $value;
    }
}
