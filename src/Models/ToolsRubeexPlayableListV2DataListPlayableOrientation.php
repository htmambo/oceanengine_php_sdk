<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsRubeexPlayableListV2DataListPlayableOrientation
{
    public const BOTH_ToolsRubeexPlayableListV2DataListPlayableOrientation = 'BOTH';
    public const PORTRAIT_ToolsRubeexPlayableListV2DataListPlayableOrientation = 'PORTRAIT';
    public const LANDSCAPE_ToolsRubeexPlayableListV2DataListPlayableOrientation = 'LANDSCAPE';

    public const ALLOWED_VALUES = [
        self::BOTH_ToolsRubeexPlayableListV2DataListPlayableOrientation,
        self::PORTRAIT_ToolsRubeexPlayableListV2DataListPlayableOrientation,
        self::LANDSCAPE_ToolsRubeexPlayableListV2DataListPlayableOrientation,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsRubeexPlayableListV2DataListPlayableOrientation', $value));
        }
        return (string) $value;
    }
}
