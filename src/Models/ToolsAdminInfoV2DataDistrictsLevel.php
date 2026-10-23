<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAdminInfoV2DataDistrictsLevel
{
    public const FOUR_LEVEL_ToolsAdminInfoV2DataDistrictsLevel = 'FOUR_LEVEL';
    public const NONE_ToolsAdminInfoV2DataDistrictsLevel = 'NONE';
    public const ONE_LEVEL_ToolsAdminInfoV2DataDistrictsLevel = 'ONE_LEVEL';
    public const THREE_LEVEL_ToolsAdminInfoV2DataDistrictsLevel = 'THREE_LEVEL';
    public const TWO_LEVEL_ToolsAdminInfoV2DataDistrictsLevel = 'TWO_LEVEL';

    public const ALLOWED_VALUES = [
        self::FOUR_LEVEL_ToolsAdminInfoV2DataDistrictsLevel,
        self::NONE_ToolsAdminInfoV2DataDistrictsLevel,
        self::ONE_LEVEL_ToolsAdminInfoV2DataDistrictsLevel,
        self::THREE_LEVEL_ToolsAdminInfoV2DataDistrictsLevel,
        self::TWO_LEVEL_ToolsAdminInfoV2DataDistrictsLevel,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAdminInfoV2DataDistrictsLevel', $value));
        }
        return (string) $value;
    }
}
