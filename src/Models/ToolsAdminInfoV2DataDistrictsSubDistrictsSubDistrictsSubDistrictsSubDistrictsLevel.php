<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAdminInfoV2DataDistrictsSubDistrictsSubDistrictsSubDistrictsSubDistrictsLevel
{
    public const FOUR_LEVEL_ToolsAdminInfoV2DataDistrictsSubDistrictsSubDistrictsSubDistrictsSubDistrictsLevel = 'FOUR_LEVEL';
    public const NONE_ToolsAdminInfoV2DataDistrictsSubDistrictsSubDistrictsSubDistrictsSubDistrictsLevel = 'NONE';
    public const ONE_LEVEL_ToolsAdminInfoV2DataDistrictsSubDistrictsSubDistrictsSubDistrictsSubDistrictsLevel = 'ONE_LEVEL';
    public const THREE_LEVEL_ToolsAdminInfoV2DataDistrictsSubDistrictsSubDistrictsSubDistrictsSubDistrictsLevel = 'THREE_LEVEL';
    public const TWO_LEVEL_ToolsAdminInfoV2DataDistrictsSubDistrictsSubDistrictsSubDistrictsSubDistrictsLevel = 'TWO_LEVEL';

    public const ALLOWED_VALUES = [
        self::FOUR_LEVEL_ToolsAdminInfoV2DataDistrictsSubDistrictsSubDistrictsSubDistrictsSubDistrictsLevel,
        self::NONE_ToolsAdminInfoV2DataDistrictsSubDistrictsSubDistrictsSubDistrictsSubDistrictsLevel,
        self::ONE_LEVEL_ToolsAdminInfoV2DataDistrictsSubDistrictsSubDistrictsSubDistrictsSubDistrictsLevel,
        self::THREE_LEVEL_ToolsAdminInfoV2DataDistrictsSubDistrictsSubDistrictsSubDistrictsSubDistrictsLevel,
        self::TWO_LEVEL_ToolsAdminInfoV2DataDistrictsSubDistrictsSubDistrictsSubDistrictsSubDistrictsLevel,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAdminInfoV2DataDistrictsSubDistrictsSubDistrictsSubDistrictsSubDistrictsLevel', $value));
        }
        return (string) $value;
    }
}
