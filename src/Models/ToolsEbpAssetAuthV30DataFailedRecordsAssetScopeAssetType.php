<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpAssetAuthV30DataFailedRecordsAssetScopeAssetType
{
    public const APP_ToolsEbpAssetAuthV30DataFailedRecordsAssetScopeAssetType = 'APP';
    public const APPLETS_ToolsEbpAssetAuthV30DataFailedRecordsAssetScopeAssetType = 'APPLETS';
    public const BYTED_APPLETS_ToolsEbpAssetAuthV30DataFailedRecordsAssetScopeAssetType = 'BYTED_APPLETS';
    public const BYTED_GAME_ToolsEbpAssetAuthV30DataFailedRecordsAssetScopeAssetType = 'BYTED_GAME';
    public const DPA_ToolsEbpAssetAuthV30DataFailedRecordsAssetScopeAssetType = 'DPA';
    public const HARMONY_APP_ToolsEbpAssetAuthV30DataFailedRecordsAssetScopeAssetType = 'HARMONY_APP';
    public const PRODUCT_ToolsEbpAssetAuthV30DataFailedRecordsAssetScopeAssetType = 'PRODUCT';
    public const QUICK_APP_ToolsEbpAssetAuthV30DataFailedRecordsAssetScopeAssetType = 'QUICK_APP';
    public const WECHAT_GAME_ToolsEbpAssetAuthV30DataFailedRecordsAssetScopeAssetType = 'WECHAT_GAME';

    public const ALLOWED_VALUES = [
        self::APP_ToolsEbpAssetAuthV30DataFailedRecordsAssetScopeAssetType,
        self::APPLETS_ToolsEbpAssetAuthV30DataFailedRecordsAssetScopeAssetType,
        self::BYTED_APPLETS_ToolsEbpAssetAuthV30DataFailedRecordsAssetScopeAssetType,
        self::BYTED_GAME_ToolsEbpAssetAuthV30DataFailedRecordsAssetScopeAssetType,
        self::DPA_ToolsEbpAssetAuthV30DataFailedRecordsAssetScopeAssetType,
        self::HARMONY_APP_ToolsEbpAssetAuthV30DataFailedRecordsAssetScopeAssetType,
        self::PRODUCT_ToolsEbpAssetAuthV30DataFailedRecordsAssetScopeAssetType,
        self::QUICK_APP_ToolsEbpAssetAuthV30DataFailedRecordsAssetScopeAssetType,
        self::WECHAT_GAME_ToolsEbpAssetAuthV30DataFailedRecordsAssetScopeAssetType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpAssetAuthV30DataFailedRecordsAssetScopeAssetType', $value));
        }
        return (string) $value;
    }
}
