<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsMicroAppListV30DataListRecommendedRechargeTier
{
    public const ABOVE_200_ToolsMicroAppListV30DataListRecommendedRechargeTier = 'ABOVE_200';
    public const FROM_100_TO_200_ToolsMicroAppListV30DataListRecommendedRechargeTier = 'FROM_100_TO_200';
    public const FROM_FIFTY_TO_HUNDRED_ToolsMicroAppListV30DataListRecommendedRechargeTier = 'FROM_FIFTY_TO_HUNDRED';
    public const FROM_ONE_TO_FIFTY_ToolsMicroAppListV30DataListRecommendedRechargeTier = 'FROM_ONE_TO_FIFTY';

    public const ALLOWED_VALUES = [
        self::ABOVE_200_ToolsMicroAppListV30DataListRecommendedRechargeTier,
        self::FROM_100_TO_200_ToolsMicroAppListV30DataListRecommendedRechargeTier,
        self::FROM_FIFTY_TO_HUNDRED_ToolsMicroAppListV30DataListRecommendedRechargeTier,
        self::FROM_ONE_TO_FIFTY_ToolsMicroAppListV30DataListRecommendedRechargeTier,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsMicroAppListV30DataListRecommendedRechargeTier', $value));
        }
        return (string) $value;
    }
}
