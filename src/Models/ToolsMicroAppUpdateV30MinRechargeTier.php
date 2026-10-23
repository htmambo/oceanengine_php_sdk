<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsMicroAppUpdateV30MinRechargeTier
{
    public const FROM_100_TO_200_ToolsMicroAppUpdateV30MinRechargeTier = 'FROM_100_TO_200';
    public const FROM_FIFTY_TO_HUNDRED_ToolsMicroAppUpdateV30MinRechargeTier = 'FROM_FIFTY_TO_HUNDRED';
    public const FROM_ONE_TO_FIFTY_ToolsMicroAppUpdateV30MinRechargeTier = 'FROM_ONE_TO_FIFTY';

    public const ALLOWED_VALUES = [
        self::FROM_100_TO_200_ToolsMicroAppUpdateV30MinRechargeTier,
        self::FROM_FIFTY_TO_HUNDRED_ToolsMicroAppUpdateV30MinRechargeTier,
        self::FROM_ONE_TO_FIFTY_ToolsMicroAppUpdateV30MinRechargeTier,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsMicroAppUpdateV30MinRechargeTier', $value));
        }
        return (string) $value;
    }
}
