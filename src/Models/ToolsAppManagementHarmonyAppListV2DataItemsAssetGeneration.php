<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementHarmonyAppListV2DataItemsAssetGeneration
{
    public const LEGACY_ToolsAppManagementHarmonyAppListV2DataItemsAssetGeneration = 'LEGACY';
    public const OC_USABLE_ToolsAppManagementHarmonyAppListV2DataItemsAssetGeneration = 'OC_USABLE';

    public const ALLOWED_VALUES = [
        self::LEGACY_ToolsAppManagementHarmonyAppListV2DataItemsAssetGeneration,
        self::OC_USABLE_ToolsAppManagementHarmonyAppListV2DataItemsAssetGeneration,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementHarmonyAppListV2DataItemsAssetGeneration', $value));
        }
        return (string) $value;
    }
}
