<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpAssetAuthListV30AssetType
{
    public const APP_ToolsEbpAssetAuthListV30AssetType = 'APP';
    public const APPLETS_ToolsEbpAssetAuthListV30AssetType = 'APPLETS';
    public const BYTED_APPLETS_ToolsEbpAssetAuthListV30AssetType = 'BYTED_APPLETS';
    public const BYTED_GAME_ToolsEbpAssetAuthListV30AssetType = 'BYTED_GAME';
    public const DPA_ToolsEbpAssetAuthListV30AssetType = 'DPA';
    public const HARMONY_APP_ToolsEbpAssetAuthListV30AssetType = 'HARMONY_APP';
    public const PRODUCT_ToolsEbpAssetAuthListV30AssetType = 'PRODUCT';
    public const QUICK_APP_ToolsEbpAssetAuthListV30AssetType = 'QUICK_APP';
    public const WECHAT_GAME_ToolsEbpAssetAuthListV30AssetType = 'WECHAT_GAME';

    public const ALLOWED_VALUES = [
        self::APP_ToolsEbpAssetAuthListV30AssetType,
        self::APPLETS_ToolsEbpAssetAuthListV30AssetType,
        self::BYTED_APPLETS_ToolsEbpAssetAuthListV30AssetType,
        self::BYTED_GAME_ToolsEbpAssetAuthListV30AssetType,
        self::DPA_ToolsEbpAssetAuthListV30AssetType,
        self::HARMONY_APP_ToolsEbpAssetAuthListV30AssetType,
        self::PRODUCT_ToolsEbpAssetAuthListV30AssetType,
        self::QUICK_APP_ToolsEbpAssetAuthListV30AssetType,
        self::WECHAT_GAME_ToolsEbpAssetAuthListV30AssetType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpAssetAuthListV30AssetType', $value));
        }
        return (string) $value;
    }
}
