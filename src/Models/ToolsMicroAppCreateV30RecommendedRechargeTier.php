<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsMicroAppCreateV30RecommendedRechargeTier
{
    public const ABOVE_200_ToolsMicroAppCreateV30RecommendedRechargeTier = 'ABOVE_200';
    public const FROM_100_TO_200_ToolsMicroAppCreateV30RecommendedRechargeTier = 'FROM_100_TO_200';
    public const FROM_FIFTY_TO_HUNDRED_ToolsMicroAppCreateV30RecommendedRechargeTier = 'FROM_FIFTY_TO_HUNDRED';
    public const FROM_ONE_TO_FIFTY_ToolsMicroAppCreateV30RecommendedRechargeTier = 'FROM_ONE_TO_FIFTY';

    public const ALLOWED_VALUES = [
        self::ABOVE_200_ToolsMicroAppCreateV30RecommendedRechargeTier,
        self::FROM_100_TO_200_ToolsMicroAppCreateV30RecommendedRechargeTier,
        self::FROM_FIFTY_TO_HUNDRED_ToolsMicroAppCreateV30RecommendedRechargeTier,
        self::FROM_ONE_TO_FIFTY_ToolsMicroAppCreateV30RecommendedRechargeTier,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsMicroAppCreateV30RecommendedRechargeTier', $value));
        }
        return (string) $value;
    }
}
