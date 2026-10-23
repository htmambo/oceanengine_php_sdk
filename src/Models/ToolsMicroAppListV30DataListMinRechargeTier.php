<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsMicroAppListV30DataListMinRechargeTier
{
    public const FROM_100_TO_200_ToolsMicroAppListV30DataListMinRechargeTier = 'FROM_100_TO_200';
    public const FROM_FIFTY_TO_HUNDRED_ToolsMicroAppListV30DataListMinRechargeTier = 'FROM_FIFTY_TO_HUNDRED';
    public const FROM_ONE_TO_FIFTY_ToolsMicroAppListV30DataListMinRechargeTier = 'FROM_ONE_TO_FIFTY';

    public const ALLOWED_VALUES = [
        self::FROM_100_TO_200_ToolsMicroAppListV30DataListMinRechargeTier,
        self::FROM_FIFTY_TO_HUNDRED_ToolsMicroAppListV30DataListMinRechargeTier,
        self::FROM_ONE_TO_FIFTY_ToolsMicroAppListV30DataListMinRechargeTier,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsMicroAppListV30DataListMinRechargeTier', $value));
        }
        return (string) $value;
    }
}
