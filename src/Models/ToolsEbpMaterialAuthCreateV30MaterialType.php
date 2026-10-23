<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpMaterialAuthCreateV30MaterialType
{
    public const PLAYABLE_NEW_ToolsEbpMaterialAuthCreateV30MaterialType = 'PLAYABLE_NEW';
    public const STRAIGHT_PLAYABLE_ToolsEbpMaterialAuthCreateV30MaterialType = 'STRAIGHT_PLAYABLE';
    public const VIDEO_ToolsEbpMaterialAuthCreateV30MaterialType = 'VIDEO';

    public const ALLOWED_VALUES = [
        self::PLAYABLE_NEW_ToolsEbpMaterialAuthCreateV30MaterialType,
        self::STRAIGHT_PLAYABLE_ToolsEbpMaterialAuthCreateV30MaterialType,
        self::VIDEO_ToolsEbpMaterialAuthCreateV30MaterialType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpMaterialAuthCreateV30MaterialType', $value));
        }
        return (string) $value;
    }
}
