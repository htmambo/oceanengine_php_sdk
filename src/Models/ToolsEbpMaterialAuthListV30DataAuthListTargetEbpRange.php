<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpMaterialAuthListV30DataAuthListTargetEbpRange
{
    public const ALL_ToolsEbpMaterialAuthListV30DataAuthListTargetEbpRange = 'ALL';
    public const SELF_ToolsEbpMaterialAuthListV30DataAuthListTargetEbpRange = 'SELF';

    public const ALLOWED_VALUES = [
        self::ALL_ToolsEbpMaterialAuthListV30DataAuthListTargetEbpRange,
        self::SELF_ToolsEbpMaterialAuthListV30DataAuthListTargetEbpRange,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpMaterialAuthListV30DataAuthListTargetEbpRange', $value));
        }
        return (string) $value;
    }
}
