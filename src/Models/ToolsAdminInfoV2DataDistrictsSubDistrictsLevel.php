<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAdminInfoV2DataDistrictsSubDistrictsLevel
{
    public const FOUR_LEVEL_ToolsAdminInfoV2DataDistrictsSubDistrictsLevel = 'FOUR_LEVEL';
    public const NONE_ToolsAdminInfoV2DataDistrictsSubDistrictsLevel = 'NONE';
    public const ONE_LEVEL_ToolsAdminInfoV2DataDistrictsSubDistrictsLevel = 'ONE_LEVEL';
    public const THREE_LEVEL_ToolsAdminInfoV2DataDistrictsSubDistrictsLevel = 'THREE_LEVEL';
    public const TWO_LEVEL_ToolsAdminInfoV2DataDistrictsSubDistrictsLevel = 'TWO_LEVEL';

    public const ALLOWED_VALUES = [
        self::FOUR_LEVEL_ToolsAdminInfoV2DataDistrictsSubDistrictsLevel,
        self::NONE_ToolsAdminInfoV2DataDistrictsSubDistrictsLevel,
        self::ONE_LEVEL_ToolsAdminInfoV2DataDistrictsSubDistrictsLevel,
        self::THREE_LEVEL_ToolsAdminInfoV2DataDistrictsSubDistrictsLevel,
        self::TWO_LEVEL_ToolsAdminInfoV2DataDistrictsSubDistrictsLevel,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAdminInfoV2DataDistrictsSubDistrictsLevel', $value));
        }
        return (string) $value;
    }
}
