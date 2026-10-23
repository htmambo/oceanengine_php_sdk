<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEventConvertOptimizedGoalGetV30AssetType
{
    public const MINI_PROGRAME_ToolsEventConvertOptimizedGoalGetV30AssetType = 'MINI_PROGRAME';
    public const TETRIS_EXTERNAL_ToolsEventConvertOptimizedGoalGetV30AssetType = 'TETRIS_EXTERNAL';

    public const ALLOWED_VALUES = [
        self::MINI_PROGRAME_ToolsEventConvertOptimizedGoalGetV30AssetType,
        self::TETRIS_EXTERNAL_ToolsEventConvertOptimizedGoalGetV30AssetType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEventConvertOptimizedGoalGetV30AssetType', $value));
        }
        return (string) $value;
    }
}
