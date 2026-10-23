<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEventAllAssetsListV2DataAssetListShareType
{
    public const MY_CREATIONS_ToolsEventAllAssetsListV2DataAssetListShareType = 'MY_CREATIONS';
    public const SHARING_ToolsEventAllAssetsListV2DataAssetListShareType = 'SHARING';
    public const SHATE_EXPIRED_ToolsEventAllAssetsListV2DataAssetListShareType = 'SHATE_EXPIRED';

    public const ALLOWED_VALUES = [
        self::MY_CREATIONS_ToolsEventAllAssetsListV2DataAssetListShareType,
        self::SHARING_ToolsEventAllAssetsListV2DataAssetListShareType,
        self::SHATE_EXPIRED_ToolsEventAllAssetsListV2DataAssetListShareType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEventAllAssetsListV2DataAssetListShareType', $value));
        }
        return (string) $value;
    }
}
