<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpAppGameBookListV30AssetGeneration
{
    public const LEGACY_ToolsEbpAppGameBookListV30AssetGeneration = 'LEGACY';
    public const OC_USABLE_ToolsEbpAppGameBookListV30AssetGeneration = 'OC_USABLE';

    public const ALLOWED_VALUES = [
        self::LEGACY_ToolsEbpAppGameBookListV30AssetGeneration,
        self::OC_USABLE_ToolsEbpAppGameBookListV30AssetGeneration,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpAppGameBookListV30AssetGeneration', $value));
        }
        return (string) $value;
    }
}
