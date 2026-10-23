<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpMaterialAuthCreateV30TargetEbpsTargetEbpRange
{
    public const ALL_ToolsEbpMaterialAuthCreateV30TargetEbpsTargetEbpRange = 'ALL';
    public const SELF_ToolsEbpMaterialAuthCreateV30TargetEbpsTargetEbpRange = 'SELF';

    public const ALLOWED_VALUES = [
        self::ALL_ToolsEbpMaterialAuthCreateV30TargetEbpsTargetEbpRange,
        self::SELF_ToolsEbpMaterialAuthCreateV30TargetEbpsTargetEbpRange,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpMaterialAuthCreateV30TargetEbpsTargetEbpRange', $value));
        }
        return (string) $value;
    }
}
