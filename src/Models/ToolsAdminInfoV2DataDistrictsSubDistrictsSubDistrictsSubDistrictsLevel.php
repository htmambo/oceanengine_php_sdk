<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAdminInfoV2DataDistrictsSubDistrictsSubDistrictsSubDistrictsLevel
{
    public const FOUR_LEVEL_ToolsAdminInfoV2DataDistrictsSubDistrictsSubDistrictsSubDistrictsLevel = 'FOUR_LEVEL';
    public const NONE_ToolsAdminInfoV2DataDistrictsSubDistrictsSubDistrictsSubDistrictsLevel = 'NONE';
    public const ONE_LEVEL_ToolsAdminInfoV2DataDistrictsSubDistrictsSubDistrictsSubDistrictsLevel = 'ONE_LEVEL';
    public const THREE_LEVEL_ToolsAdminInfoV2DataDistrictsSubDistrictsSubDistrictsSubDistrictsLevel = 'THREE_LEVEL';
    public const TWO_LEVEL_ToolsAdminInfoV2DataDistrictsSubDistrictsSubDistrictsSubDistrictsLevel = 'TWO_LEVEL';

    public const ALLOWED_VALUES = [
        self::FOUR_LEVEL_ToolsAdminInfoV2DataDistrictsSubDistrictsSubDistrictsSubDistrictsLevel,
        self::NONE_ToolsAdminInfoV2DataDistrictsSubDistrictsSubDistrictsSubDistrictsLevel,
        self::ONE_LEVEL_ToolsAdminInfoV2DataDistrictsSubDistrictsSubDistrictsSubDistrictsLevel,
        self::THREE_LEVEL_ToolsAdminInfoV2DataDistrictsSubDistrictsSubDistrictsSubDistrictsLevel,
        self::TWO_LEVEL_ToolsAdminInfoV2DataDistrictsSubDistrictsSubDistrictsSubDistrictsLevel,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAdminInfoV2DataDistrictsSubDistrictsSubDistrictsSubDistrictsLevel', $value));
        }
        return (string) $value;
    }
}
