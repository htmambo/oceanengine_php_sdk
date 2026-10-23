<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsPlayableSaveV2DataPlayableOrientation
{
    public const BOTH_ToolsPlayableSaveV2DataPlayableOrientation = 'BOTH';
    public const LANDSCAPE_ToolsPlayableSaveV2DataPlayableOrientation = 'LANDSCAPE';
    public const PORTRAIT_ToolsPlayableSaveV2DataPlayableOrientation = 'PORTRAIT';

    public const ALLOWED_VALUES = [
        self::BOTH_ToolsPlayableSaveV2DataPlayableOrientation,
        self::LANDSCAPE_ToolsPlayableSaveV2DataPlayableOrientation,
        self::PORTRAIT_ToolsPlayableSaveV2DataPlayableOrientation,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsPlayableSaveV2DataPlayableOrientation', $value));
        }
        return (string) $value;
    }
}
