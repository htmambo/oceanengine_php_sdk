<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpAppListV30DataBasicAppListAssetGeneration
{
    public const LEGACY_ToolsEbpAppListV30DataBasicAppListAssetGeneration = 'LEGACY';
    public const OC_USABLE_ToolsEbpAppListV30DataBasicAppListAssetGeneration = 'OC_USABLE';

    public const ALLOWED_VALUES = [
        self::LEGACY_ToolsEbpAppListV30DataBasicAppListAssetGeneration,
        self::OC_USABLE_ToolsEbpAppListV30DataBasicAppListAssetGeneration,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpAppListV30DataBasicAppListAssetGeneration', $value));
        }
        return (string) $value;
    }
}
