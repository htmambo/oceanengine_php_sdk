<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAdminInfoV2DataDistrictsSubDistrictsSubDistrictsLevel
{
    public const FOUR_LEVEL_ToolsAdminInfoV2DataDistrictsSubDistrictsSubDistrictsLevel = 'FOUR_LEVEL';
    public const NONE_ToolsAdminInfoV2DataDistrictsSubDistrictsSubDistrictsLevel = 'NONE';
    public const ONE_LEVEL_ToolsAdminInfoV2DataDistrictsSubDistrictsSubDistrictsLevel = 'ONE_LEVEL';
    public const THREE_LEVEL_ToolsAdminInfoV2DataDistrictsSubDistrictsSubDistrictsLevel = 'THREE_LEVEL';
    public const TWO_LEVEL_ToolsAdminInfoV2DataDistrictsSubDistrictsSubDistrictsLevel = 'TWO_LEVEL';

    public const ALLOWED_VALUES = [
        self::FOUR_LEVEL_ToolsAdminInfoV2DataDistrictsSubDistrictsSubDistrictsLevel,
        self::NONE_ToolsAdminInfoV2DataDistrictsSubDistrictsSubDistrictsLevel,
        self::ONE_LEVEL_ToolsAdminInfoV2DataDistrictsSubDistrictsSubDistrictsLevel,
        self::THREE_LEVEL_ToolsAdminInfoV2DataDistrictsSubDistrictsSubDistrictsLevel,
        self::TWO_LEVEL_ToolsAdminInfoV2DataDistrictsSubDistrictsSubDistrictsLevel,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAdminInfoV2DataDistrictsSubDistrictsSubDistrictsLevel', $value));
        }
        return (string) $value;
    }
}
