<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsBpAssetManagementShareGetV30AssetType
{
    public const APPLETS_ToolsBpAssetManagementShareGetV30AssetType = 'APPLETS';
    public const BYTED_APPLETS_ToolsBpAssetManagementShareGetV30AssetType = 'BYTED_APPLETS';
    public const BYTED_GAME_ToolsBpAssetManagementShareGetV30AssetType = 'BYTED_GAME';
    public const WECHAT_GAME_ToolsBpAssetManagementShareGetV30AssetType = 'WECHAT_GAME';

    public const ALLOWED_VALUES = [
        self::APPLETS_ToolsBpAssetManagementShareGetV30AssetType,
        self::BYTED_APPLETS_ToolsBpAssetManagementShareGetV30AssetType,
        self::BYTED_GAME_ToolsBpAssetManagementShareGetV30AssetType,
        self::WECHAT_GAME_ToolsBpAssetManagementShareGetV30AssetType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsBpAssetManagementShareGetV30AssetType', $value));
        }
        return (string) $value;
    }
}
