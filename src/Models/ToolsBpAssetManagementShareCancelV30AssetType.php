<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsBpAssetManagementShareCancelV30AssetType
{
    public const APPLETS_ToolsBpAssetManagementShareCancelV30AssetType = 'APPLETS';
    public const BYTED_APPLETS_ToolsBpAssetManagementShareCancelV30AssetType = 'BYTED_APPLETS';
    public const BYTED_GAME_ToolsBpAssetManagementShareCancelV30AssetType = 'BYTED_GAME';
    public const DPA_ToolsBpAssetManagementShareCancelV30AssetType = 'DPA';
    public const PRODUCT_ToolsBpAssetManagementShareCancelV30AssetType = 'PRODUCT';
    public const WECHAT_GAME_ToolsBpAssetManagementShareCancelV30AssetType = 'WECHAT_GAME';

    public const ALLOWED_VALUES = [
        self::APPLETS_ToolsBpAssetManagementShareCancelV30AssetType,
        self::BYTED_APPLETS_ToolsBpAssetManagementShareCancelV30AssetType,
        self::BYTED_GAME_ToolsBpAssetManagementShareCancelV30AssetType,
        self::DPA_ToolsBpAssetManagementShareCancelV30AssetType,
        self::PRODUCT_ToolsBpAssetManagementShareCancelV30AssetType,
        self::WECHAT_GAME_ToolsBpAssetManagementShareCancelV30AssetType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsBpAssetManagementShareCancelV30AssetType', $value));
        }
        return (string) $value;
    }
}
