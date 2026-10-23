<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpAppUpdateV30MaxRechargeTier
{
    public const ABOVE_200_ToolsEbpAppUpdateV30MaxRechargeTier = 'ABOVE_200';
    public const FROM_100_TO_200_ToolsEbpAppUpdateV30MaxRechargeTier = 'FROM_100_TO_200';
    public const FROM_FIFTY_TO_HUNDRED_ToolsEbpAppUpdateV30MaxRechargeTier = 'FROM_FIFTY_TO_HUNDRED';
    public const FROM_ONE_TO_FIFTY_ToolsEbpAppUpdateV30MaxRechargeTier = 'FROM_ONE_TO_FIFTY';

    public const ALLOWED_VALUES = [
        self::ABOVE_200_ToolsEbpAppUpdateV30MaxRechargeTier,
        self::FROM_100_TO_200_ToolsEbpAppUpdateV30MaxRechargeTier,
        self::FROM_FIFTY_TO_HUNDRED_ToolsEbpAppUpdateV30MaxRechargeTier,
        self::FROM_ONE_TO_FIFTY_ToolsEbpAppUpdateV30MaxRechargeTier,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpAppUpdateV30MaxRechargeTier', $value));
        }
        return (string) $value;
    }
}
