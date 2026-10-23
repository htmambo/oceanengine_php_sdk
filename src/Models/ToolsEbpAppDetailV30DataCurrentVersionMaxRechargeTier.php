<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpAppDetailV30DataCurrentVersionMaxRechargeTier
{
    public const ABOVE_200_ToolsEbpAppDetailV30DataCurrentVersionMaxRechargeTier = 'ABOVE_200';
    public const FROM_100_TO_200_ToolsEbpAppDetailV30DataCurrentVersionMaxRechargeTier = 'FROM_100_TO_200';
    public const FROM_FIFTY_TO_HUNDRED_ToolsEbpAppDetailV30DataCurrentVersionMaxRechargeTier = 'FROM_FIFTY_TO_HUNDRED';
    public const FROM_ONE_TO_FIFTY_ToolsEbpAppDetailV30DataCurrentVersionMaxRechargeTier = 'FROM_ONE_TO_FIFTY';

    public const ALLOWED_VALUES = [
        self::ABOVE_200_ToolsEbpAppDetailV30DataCurrentVersionMaxRechargeTier,
        self::FROM_100_TO_200_ToolsEbpAppDetailV30DataCurrentVersionMaxRechargeTier,
        self::FROM_FIFTY_TO_HUNDRED_ToolsEbpAppDetailV30DataCurrentVersionMaxRechargeTier,
        self::FROM_ONE_TO_FIFTY_ToolsEbpAppDetailV30DataCurrentVersionMaxRechargeTier,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpAppDetailV30DataCurrentVersionMaxRechargeTier', $value));
        }
        return (string) $value;
    }
}
