<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEventAllAssetsDetailV2DataAssetListAssetType
{
    public const THIRD_EXTERNAL_ToolsEventAllAssetsDetailV2DataAssetListAssetType = 'THIRD_EXTERNAL';
    public const TETRIS_EXTERNAL_ToolsEventAllAssetsDetailV2DataAssetListAssetType = 'TETRIS_EXTERNAL';
    public const APP_ToolsEventAllAssetsDetailV2DataAssetListAssetType = 'APP';
    public const QUICK_APP_ToolsEventAllAssetsDetailV2DataAssetListAssetType = 'QUICK_APP';
    public const MINI_PROGRAME_ToolsEventAllAssetsDetailV2DataAssetListAssetType = 'MINI_PROGRAME';

    public const ALLOWED_VALUES = [
        self::THIRD_EXTERNAL_ToolsEventAllAssetsDetailV2DataAssetListAssetType,
        self::TETRIS_EXTERNAL_ToolsEventAllAssetsDetailV2DataAssetListAssetType,
        self::APP_ToolsEventAllAssetsDetailV2DataAssetListAssetType,
        self::QUICK_APP_ToolsEventAllAssetsDetailV2DataAssetListAssetType,
        self::MINI_PROGRAME_ToolsEventAllAssetsDetailV2DataAssetListAssetType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEventAllAssetsDetailV2DataAssetListAssetType', $value));
        }
        return (string) $value;
    }
}
