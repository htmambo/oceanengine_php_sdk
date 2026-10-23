<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EventManagerOptimizedGoalGetV2V30MultiAssetType
{
    public const ORANGE_EventManagerOptimizedGoalGetV2V30MultiAssetType = 'ORANGE';
    public const ORANGE_AND_AWEME_EventManagerOptimizedGoalGetV2V30MultiAssetType = 'ORANGE_AND_AWEME';

    public const ALLOWED_VALUES = [
        self::ORANGE_EventManagerOptimizedGoalGetV2V30MultiAssetType,
        self::ORANGE_AND_AWEME_EventManagerOptimizedGoalGetV2V30MultiAssetType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EventManagerOptimizedGoalGetV2V30MultiAssetType', $value));
        }
        return (string) $value;
    }
}
