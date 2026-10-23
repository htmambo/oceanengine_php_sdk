<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpMaterialAuthCreateV30DataFailedListTargetEbpRange
{
    public const ALL_ToolsEbpMaterialAuthCreateV30DataFailedListTargetEbpRange = 'ALL';
    public const SELF_ToolsEbpMaterialAuthCreateV30DataFailedListTargetEbpRange = 'SELF';

    public const ALLOWED_VALUES = [
        self::ALL_ToolsEbpMaterialAuthCreateV30DataFailedListTargetEbpRange,
        self::SELF_ToolsEbpMaterialAuthCreateV30DataFailedListTargetEbpRange,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpMaterialAuthCreateV30DataFailedListTargetEbpRange', $value));
        }
        return (string) $value;
    }
}
