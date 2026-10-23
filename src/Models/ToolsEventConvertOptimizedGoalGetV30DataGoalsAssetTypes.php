<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEventConvertOptimizedGoalGetV30DataGoalsAssetTypes
{
    public const MINI_PROGRAME_ToolsEventConvertOptimizedGoalGetV30DataGoalsAssetTypes = 'MINI_PROGRAME';
    public const TETRIS_EXTERNAL_ToolsEventConvertOptimizedGoalGetV30DataGoalsAssetTypes = 'TETRIS_EXTERNAL';

    public const ALLOWED_VALUES = [
        self::MINI_PROGRAME_ToolsEventConvertOptimizedGoalGetV30DataGoalsAssetTypes,
        self::TETRIS_EXTERNAL_ToolsEventConvertOptimizedGoalGetV30DataGoalsAssetTypes,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEventConvertOptimizedGoalGetV30DataGoalsAssetTypes', $value));
        }
        return (string) $value;
    }
}
