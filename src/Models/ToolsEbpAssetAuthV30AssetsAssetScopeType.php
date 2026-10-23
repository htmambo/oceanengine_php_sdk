<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpAssetAuthV30AssetsAssetScopeType
{
    public const GROUP_DIRECT_ASSET_ToolsEbpAssetAuthV30AssetsAssetScopeType = 'GroupDirectAsset';
    public const GROUP_OVERALL_ASSET_ToolsEbpAssetAuthV30AssetsAssetScopeType = 'GroupOverallAsset';
    public const SINGLE_ASSET_ToolsEbpAssetAuthV30AssetsAssetScopeType = 'SingleAsset';

    public const ALLOWED_VALUES = [
        self::GROUP_DIRECT_ASSET_ToolsEbpAssetAuthV30AssetsAssetScopeType,
        self::GROUP_OVERALL_ASSET_ToolsEbpAssetAuthV30AssetsAssetScopeType,
        self::SINGLE_ASSET_ToolsEbpAssetAuthV30AssetsAssetScopeType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpAssetAuthV30AssetsAssetScopeType', $value));
        }
        return (string) $value;
    }
}
