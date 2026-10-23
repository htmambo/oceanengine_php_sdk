<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEventAllAssetsListV2FilteringAssetType
{
    public const THIRD_EXTERNAL_ToolsEventAllAssetsListV2FilteringAssetType = 'THIRD_EXTERNAL';
    public const TETRIS_EXTERNAL_ToolsEventAllAssetsListV2FilteringAssetType = 'TETRIS_EXTERNAL';
    public const APP_ToolsEventAllAssetsListV2FilteringAssetType = 'APP';
    public const QUICK_APP_ToolsEventAllAssetsListV2FilteringAssetType = 'QUICK_APP';
    public const MINI_PROGRAME_ToolsEventAllAssetsListV2FilteringAssetType = 'MINI_PROGRAME';

    public const ALLOWED_VALUES = [
        self::THIRD_EXTERNAL_ToolsEventAllAssetsListV2FilteringAssetType,
        self::TETRIS_EXTERNAL_ToolsEventAllAssetsListV2FilteringAssetType,
        self::APP_ToolsEventAllAssetsListV2FilteringAssetType,
        self::QUICK_APP_ToolsEventAllAssetsListV2FilteringAssetType,
        self::MINI_PROGRAME_ToolsEventAllAssetsListV2FilteringAssetType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEventAllAssetsListV2FilteringAssetType', $value));
        }
        return (string) $value;
    }
}
