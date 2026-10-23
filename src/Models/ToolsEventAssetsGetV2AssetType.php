<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEventAssetsGetV2AssetType
{
    public const THIRD_EXTERNAL_ToolsEventAssetsGetV2AssetType = 'THIRD_EXTERNAL';
    public const APP_ToolsEventAssetsGetV2AssetType = 'APP';
    public const QUICK_APP_ToolsEventAssetsGetV2AssetType = 'QUICK_APP';
    public const MINI_PROGRAME_ToolsEventAssetsGetV2AssetType = 'MINI_PROGRAME';

    public const ALLOWED_VALUES = [
        self::THIRD_EXTERNAL_ToolsEventAssetsGetV2AssetType,
        self::APP_ToolsEventAssetsGetV2AssetType,
        self::QUICK_APP_ToolsEventAssetsGetV2AssetType,
        self::MINI_PROGRAME_ToolsEventAssetsGetV2AssetType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEventAssetsGetV2AssetType', $value));
        }
        return (string) $value;
    }
}
