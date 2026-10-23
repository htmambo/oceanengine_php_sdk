<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsBpAssetManagementShareV30AssetType
{
    public const APPLETS_ToolsBpAssetManagementShareV30AssetType = 'APPLETS';
    public const BYTED_APPLETS_ToolsBpAssetManagementShareV30AssetType = 'BYTED_APPLETS';
    public const BYTED_GAME_ToolsBpAssetManagementShareV30AssetType = 'BYTED_GAME';
    public const DPA_ToolsBpAssetManagementShareV30AssetType = 'DPA';
    public const PRODUCT_ToolsBpAssetManagementShareV30AssetType = 'PRODUCT';
    public const WECHAT_GAME_ToolsBpAssetManagementShareV30AssetType = 'WECHAT_GAME';

    public const ALLOWED_VALUES = [
        self::APPLETS_ToolsBpAssetManagementShareV30AssetType,
        self::BYTED_APPLETS_ToolsBpAssetManagementShareV30AssetType,
        self::BYTED_GAME_ToolsBpAssetManagementShareV30AssetType,
        self::DPA_ToolsBpAssetManagementShareV30AssetType,
        self::PRODUCT_ToolsBpAssetManagementShareV30AssetType,
        self::WECHAT_GAME_ToolsBpAssetManagementShareV30AssetType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsBpAssetManagementShareV30AssetType', $value));
        }
        return (string) $value;
    }
}
