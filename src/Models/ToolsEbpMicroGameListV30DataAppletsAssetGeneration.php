<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpMicroGameListV30DataAppletsAssetGeneration
{
    public const LEGACY_ToolsEbpMicroGameListV30DataAppletsAssetGeneration = 'LEGACY';
    public const OC_USABLE_ToolsEbpMicroGameListV30DataAppletsAssetGeneration = 'OC_USABLE';

    public const ALLOWED_VALUES = [
        self::LEGACY_ToolsEbpMicroGameListV30DataAppletsAssetGeneration,
        self::OC_USABLE_ToolsEbpMicroGameListV30DataAppletsAssetGeneration,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpMicroGameListV30DataAppletsAssetGeneration', $value));
        }
        return (string) $value;
    }
}
