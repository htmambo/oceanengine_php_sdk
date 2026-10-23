<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEventAllAssetsDetailV2DataAssetListAppType
{
    public const ANDROID_ToolsEventAllAssetsDetailV2DataAssetListAppType = 'ANDROID';
    public const IOS_ToolsEventAllAssetsDetailV2DataAssetListAppType = 'IOS';
    public const HARMONY_ToolsEventAllAssetsDetailV2DataAssetListAppType = 'HARMONY';

    public const ALLOWED_VALUES = [
        self::ANDROID_ToolsEventAllAssetsDetailV2DataAssetListAppType,
        self::IOS_ToolsEventAllAssetsDetailV2DataAssetListAppType,
        self::HARMONY_ToolsEventAllAssetsDetailV2DataAssetListAppType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEventAllAssetsDetailV2DataAssetListAppType', $value));
        }
        return (string) $value;
    }
}
