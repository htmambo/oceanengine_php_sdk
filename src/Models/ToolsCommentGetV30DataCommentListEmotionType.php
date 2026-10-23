<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsCommentGetV30DataCommentListEmotionType
{
    public const NEGATIVE_ToolsCommentGetV30DataCommentListEmotionType = 'NEGATIVE';
    public const NEUTRAL_ToolsCommentGetV30DataCommentListEmotionType = 'NEUTRAL';
    public const POSITIVE_ToolsCommentGetV30DataCommentListEmotionType = 'POSITIVE';

    public const ALLOWED_VALUES = [
        self::NEGATIVE_ToolsCommentGetV30DataCommentListEmotionType,
        self::NEUTRAL_ToolsCommentGetV30DataCommentListEmotionType,
        self::POSITIVE_ToolsCommentGetV30DataCommentListEmotionType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsCommentGetV30DataCommentListEmotionType', $value));
        }
        return (string) $value;
    }
}
