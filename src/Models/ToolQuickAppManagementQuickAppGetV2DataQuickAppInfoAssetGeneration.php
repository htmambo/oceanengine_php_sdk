<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolQuickAppManagementQuickAppGetV2DataQuickAppInfoAssetGeneration
{
    public const LEGACY_ToolQuickAppManagementQuickAppGetV2DataQuickAppInfoAssetGeneration = 'LEGACY';
    public const OC_USABLE_ToolQuickAppManagementQuickAppGetV2DataQuickAppInfoAssetGeneration = 'OC_USABLE';

    public const ALLOWED_VALUES = [
        self::LEGACY_ToolQuickAppManagementQuickAppGetV2DataQuickAppInfoAssetGeneration,
        self::OC_USABLE_ToolQuickAppManagementQuickAppGetV2DataQuickAppInfoAssetGeneration,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolQuickAppManagementQuickAppGetV2DataQuickAppInfoAssetGeneration', $value));
        }
        return (string) $value;
    }
}
