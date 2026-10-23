<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsCommentGetV30FilteringEmotionType
{
    public const NEGATIVE_ToolsCommentGetV30FilteringEmotionType = 'NEGATIVE';
    public const NEUTRAL_ToolsCommentGetV30FilteringEmotionType = 'NEUTRAL';
    public const POSITIVE_ToolsCommentGetV30FilteringEmotionType = 'POSITIVE';

    public const ALLOWED_VALUES = [
        self::NEGATIVE_ToolsCommentGetV30FilteringEmotionType,
        self::NEUTRAL_ToolsCommentGetV30FilteringEmotionType,
        self::POSITIVE_ToolsCommentGetV30FilteringEmotionType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsCommentGetV30FilteringEmotionType', $value));
        }
        return (string) $value;
    }
}
