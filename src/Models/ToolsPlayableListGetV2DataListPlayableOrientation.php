<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsPlayableListGetV2DataListPlayableOrientation
{
    public const LANDSCAPE_ToolsPlayableListGetV2DataListPlayableOrientation = 'LANDSCAPE';
    public const PORTRAIT_ToolsPlayableListGetV2DataListPlayableOrientation = 'PORTRAIT';
    public const BOTH_ToolsPlayableListGetV2DataListPlayableOrientation = 'BOTH';

    public const ALLOWED_VALUES = [
        self::LANDSCAPE_ToolsPlayableListGetV2DataListPlayableOrientation,
        self::PORTRAIT_ToolsPlayableListGetV2DataListPlayableOrientation,
        self::BOTH_ToolsPlayableListGetV2DataListPlayableOrientation,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsPlayableListGetV2DataListPlayableOrientation', $value));
        }
        return (string) $value;
    }
}
