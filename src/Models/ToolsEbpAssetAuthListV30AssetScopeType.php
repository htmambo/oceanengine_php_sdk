<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpAssetAuthListV30AssetScopeType
{
    public const GROUP_DIRECT_ASSET_ToolsEbpAssetAuthListV30AssetScopeType = 'GroupDirectAsset';
    public const GROUP_OVERALL_ASSET_ToolsEbpAssetAuthListV30AssetScopeType = 'GroupOverallAsset';
    public const SINGLE_ASSET_ToolsEbpAssetAuthListV30AssetScopeType = 'SingleAsset';

    public const ALLOWED_VALUES = [
        self::GROUP_DIRECT_ASSET_ToolsEbpAssetAuthListV30AssetScopeType,
        self::GROUP_OVERALL_ASSET_ToolsEbpAssetAuthListV30AssetScopeType,
        self::SINGLE_ASSET_ToolsEbpAssetAuthListV30AssetScopeType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpAssetAuthListV30AssetScopeType', $value));
        }
        return (string) $value;
    }
}
