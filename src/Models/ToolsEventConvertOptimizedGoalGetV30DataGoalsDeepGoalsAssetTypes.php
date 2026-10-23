<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEventConvertOptimizedGoalGetV30DataGoalsDeepGoalsAssetTypes
{
    public const MINI_PROGRAME_ToolsEventConvertOptimizedGoalGetV30DataGoalsDeepGoalsAssetTypes = 'MINI_PROGRAME';
    public const TETRIS_EXTERNAL_ToolsEventConvertOptimizedGoalGetV30DataGoalsDeepGoalsAssetTypes = 'TETRIS_EXTERNAL';

    public const ALLOWED_VALUES = [
        self::MINI_PROGRAME_ToolsEventConvertOptimizedGoalGetV30DataGoalsDeepGoalsAssetTypes,
        self::TETRIS_EXTERNAL_ToolsEventConvertOptimizedGoalGetV30DataGoalsDeepGoalsAssetTypes,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEventConvertOptimizedGoalGetV30DataGoalsDeepGoalsAssetTypes', $value));
        }
        return (string) $value;
    }
}
