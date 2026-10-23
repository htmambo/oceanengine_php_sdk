<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAdminInfoV2SubDistrict
{
    public const FOUR_LEVEL_ToolsAdminInfoV2SubDistrict = 'FOUR_LEVEL';
    public const NONE_ToolsAdminInfoV2SubDistrict = 'NONE';
    public const ONE_LEVEL_ToolsAdminInfoV2SubDistrict = 'ONE_LEVEL';
    public const THREE_LEVEL_ToolsAdminInfoV2SubDistrict = 'THREE_LEVEL';
    public const TWO_LEVEL_ToolsAdminInfoV2SubDistrict = 'TWO_LEVEL';

    public const ALLOWED_VALUES = [
        self::FOUR_LEVEL_ToolsAdminInfoV2SubDistrict,
        self::NONE_ToolsAdminInfoV2SubDistrict,
        self::ONE_LEVEL_ToolsAdminInfoV2SubDistrict,
        self::THREE_LEVEL_ToolsAdminInfoV2SubDistrict,
        self::TWO_LEVEL_ToolsAdminInfoV2SubDistrict,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAdminInfoV2SubDistrict', $value));
        }
        return (string) $value;
    }
}
