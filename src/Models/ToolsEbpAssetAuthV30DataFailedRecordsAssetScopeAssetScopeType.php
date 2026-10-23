<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpAssetAuthV30DataFailedRecordsAssetScopeAssetScopeType
{
    public const GROUP_DIRECT_ASSET_ToolsEbpAssetAuthV30DataFailedRecordsAssetScopeAssetScopeType = 'GroupDirectAsset';
    public const GROUP_OVERALL_ASSET_ToolsEbpAssetAuthV30DataFailedRecordsAssetScopeAssetScopeType = 'GroupOverallAsset';
    public const SINGLE_ASSET_ToolsEbpAssetAuthV30DataFailedRecordsAssetScopeAssetScopeType = 'SingleAsset';

    public const ALLOWED_VALUES = [
        self::GROUP_DIRECT_ASSET_ToolsEbpAssetAuthV30DataFailedRecordsAssetScopeAssetScopeType,
        self::GROUP_OVERALL_ASSET_ToolsEbpAssetAuthV30DataFailedRecordsAssetScopeAssetScopeType,
        self::SINGLE_ASSET_ToolsEbpAssetAuthV30DataFailedRecordsAssetScopeAssetScopeType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpAssetAuthV30DataFailedRecordsAssetScopeAssetScopeType', $value));
        }
        return (string) $value;
    }
}
