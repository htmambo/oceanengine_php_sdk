<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpMaterialAuthListV30MaterialType
{
    public const PLAYABLE_NEW_ToolsEbpMaterialAuthListV30MaterialType = 'PLAYABLE_NEW';
    public const STRAIGHT_PLAYABLE_ToolsEbpMaterialAuthListV30MaterialType = 'STRAIGHT_PLAYABLE';
    public const VIDEO_ToolsEbpMaterialAuthListV30MaterialType = 'VIDEO';

    public const ALLOWED_VALUES = [
        self::PLAYABLE_NEW_ToolsEbpMaterialAuthListV30MaterialType,
        self::STRAIGHT_PLAYABLE_ToolsEbpMaterialAuthListV30MaterialType,
        self::VIDEO_ToolsEbpMaterialAuthListV30MaterialType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpMaterialAuthListV30MaterialType', $value));
        }
        return (string) $value;
    }
}
