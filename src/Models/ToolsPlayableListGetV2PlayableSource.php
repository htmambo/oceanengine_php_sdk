<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsPlayableListGetV2PlayableSource
{
    public const EXCLUDE_DIRECT_ToolsPlayableListGetV2PlayableSource = 'EXCLUDE_DIRECT';
    public const DIRECT_PLAYABLE_ToolsPlayableListGetV2PlayableSource = 'DIRECT_PLAYABLE';

    public const ALLOWED_VALUES = [
        self::EXCLUDE_DIRECT_ToolsPlayableListGetV2PlayableSource,
        self::DIRECT_PLAYABLE_ToolsPlayableListGetV2PlayableSource,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsPlayableListGetV2PlayableSource', $value));
        }
        return (string) $value;
    }
}
