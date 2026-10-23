<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsCommentGetV30DataCommentListCommentPermission
{
    public const READ_ToolsCommentGetV30DataCommentListCommentPermission = 'READ';
    public const WRITE_ToolsCommentGetV30DataCommentListCommentPermission = 'WRITE';

    public const ALLOWED_VALUES = [
        self::READ_ToolsCommentGetV30DataCommentListCommentPermission,
        self::WRITE_ToolsCommentGetV30DataCommentListCommentPermission,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsCommentGetV30DataCommentListCommentPermission', $value));
        }
        return (string) $value;
    }
}
