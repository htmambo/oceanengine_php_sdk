<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpAppDetailV30DataCurrentVersionMinRechargeTier
{
    public const FROM_100_TO_200_ToolsEbpAppDetailV30DataCurrentVersionMinRechargeTier = 'FROM_100_TO_200';
    public const FROM_FIFTY_TO_HUNDRED_ToolsEbpAppDetailV30DataCurrentVersionMinRechargeTier = 'FROM_FIFTY_TO_HUNDRED';
    public const FROM_ONE_TO_FIFTY_ToolsEbpAppDetailV30DataCurrentVersionMinRechargeTier = 'FROM_ONE_TO_FIFTY';

    public const ALLOWED_VALUES = [
        self::FROM_100_TO_200_ToolsEbpAppDetailV30DataCurrentVersionMinRechargeTier,
        self::FROM_FIFTY_TO_HUNDRED_ToolsEbpAppDetailV30DataCurrentVersionMinRechargeTier,
        self::FROM_ONE_TO_FIFTY_ToolsEbpAppDetailV30DataCurrentVersionMinRechargeTier,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpAppDetailV30DataCurrentVersionMinRechargeTier', $value));
        }
        return (string) $value;
    }
}
