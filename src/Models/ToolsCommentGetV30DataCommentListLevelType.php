<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsCommentGetV30DataCommentListLevelType
{
    public const LEVEL_ALL_ToolsCommentGetV30DataCommentListLevelType = 'LEVEL_ALL';
    public const LEVEL_ONE_ToolsCommentGetV30DataCommentListLevelType = 'LEVEL_ONE';
    public const LEVEL_TWO_ToolsCommentGetV30DataCommentListLevelType = 'LEVEL_TWO';

    public const ALLOWED_VALUES = [
        self::LEVEL_ALL_ToolsCommentGetV30DataCommentListLevelType,
        self::LEVEL_ONE_ToolsCommentGetV30DataCommentListLevelType,
        self::LEVEL_TWO_ToolsCommentGetV30DataCommentListLevelType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsCommentGetV30DataCommentListLevelType', $value));
        }
        return (string) $value;
    }
}
