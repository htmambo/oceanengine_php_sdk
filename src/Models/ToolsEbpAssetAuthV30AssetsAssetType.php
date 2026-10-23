<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpAssetAuthV30AssetsAssetType
{
    public const APP_ToolsEbpAssetAuthV30AssetsAssetType = 'APP';
    public const APPLETS_ToolsEbpAssetAuthV30AssetsAssetType = 'APPLETS';
    public const BYTED_APPLETS_ToolsEbpAssetAuthV30AssetsAssetType = 'BYTED_APPLETS';
    public const BYTED_GAME_ToolsEbpAssetAuthV30AssetsAssetType = 'BYTED_GAME';
    public const DPA_ToolsEbpAssetAuthV30AssetsAssetType = 'DPA';
    public const EVENT_MANAGER_ToolsEbpAssetAuthV30AssetsAssetType = 'EVENT_MANAGER';
    public const HARMONY_APP_ToolsEbpAssetAuthV30AssetsAssetType = 'HARMONY_APP';
    public const PRODUCT_ToolsEbpAssetAuthV30AssetsAssetType = 'PRODUCT';
    public const QUICK_APP_ToolsEbpAssetAuthV30AssetsAssetType = 'QUICK_APP';
    public const WECHAT_GAME_ToolsEbpAssetAuthV30AssetsAssetType = 'WECHAT_GAME';

    public const ALLOWED_VALUES = [
        self::APP_ToolsEbpAssetAuthV30AssetsAssetType,
        self::APPLETS_ToolsEbpAssetAuthV30AssetsAssetType,
        self::BYTED_APPLETS_ToolsEbpAssetAuthV30AssetsAssetType,
        self::BYTED_GAME_ToolsEbpAssetAuthV30AssetsAssetType,
        self::DPA_ToolsEbpAssetAuthV30AssetsAssetType,
        self::EVENT_MANAGER_ToolsEbpAssetAuthV30AssetsAssetType,
        self::HARMONY_APP_ToolsEbpAssetAuthV30AssetsAssetType,
        self::PRODUCT_ToolsEbpAssetAuthV30AssetsAssetType,
        self::QUICK_APP_ToolsEbpAssetAuthV30AssetsAssetType,
        self::WECHAT_GAME_ToolsEbpAssetAuthV30AssetsAssetType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpAssetAuthV30AssetsAssetType', $value));
        }
        return (string) $value;
    }
}
