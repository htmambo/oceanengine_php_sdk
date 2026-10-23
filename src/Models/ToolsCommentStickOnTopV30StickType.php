<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsCommentStickOnTopV30StickType
{
    public const CANCEL_STICK_ToolsCommentStickOnTopV30StickType = 'CANCEL_STICK';
    public const STICK_ON_TOP_ToolsCommentStickOnTopV30StickType = 'STICK_ON_TOP';

    public const ALLOWED_VALUES = [
        self::CANCEL_STICK_ToolsCommentStickOnTopV30StickType,
        self::STICK_ON_TOP_ToolsCommentStickOnTopV30StickType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsCommentStickOnTopV30StickType', $value));
        }
        return (string) $value;
    }
}
