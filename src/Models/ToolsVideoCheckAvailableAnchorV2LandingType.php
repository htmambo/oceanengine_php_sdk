<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsVideoCheckAvailableAnchorV2LandingType
{
    public const APP_ToolsVideoCheckAvailableAnchorV2LandingType = 'APP';

    public const ALLOWED_VALUES = [
        self::APP_ToolsVideoCheckAvailableAnchorV2LandingType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsVideoCheckAvailableAnchorV2LandingType', $value));
        }
        return (string) $value;
    }
}
