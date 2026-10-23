<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsPlayableValidateV2DataPlayableOrientation
{
    public const BOTH_ToolsPlayableValidateV2DataPlayableOrientation = 'BOTH';
    public const LANDSCAPE_ToolsPlayableValidateV2DataPlayableOrientation = 'LANDSCAPE';
    public const PORTRAIT_ToolsPlayableValidateV2DataPlayableOrientation = 'PORTRAIT';

    public const ALLOWED_VALUES = [
        self::BOTH_ToolsPlayableValidateV2DataPlayableOrientation,
        self::LANDSCAPE_ToolsPlayableValidateV2DataPlayableOrientation,
        self::PORTRAIT_ToolsPlayableValidateV2DataPlayableOrientation,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsPlayableValidateV2DataPlayableOrientation', $value));
        }
        return (string) $value;
    }
}
