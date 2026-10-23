<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EventManagerOptimizedGoalGetV2V30AssetType
{
    public const APP_EventManagerOptimizedGoalGetV2V30AssetType = 'APP';
    public const AWEME_EventManagerOptimizedGoalGetV2V30AssetType = 'AWEME';
    public const ENTERPRISE_EventManagerOptimizedGoalGetV2V30AssetType = 'ENTERPRISE';
    public const MICRO_APP_EventManagerOptimizedGoalGetV2V30AssetType = 'MICRO_APP';
    public const MINI_PROGRAM_EventManagerOptimizedGoalGetV2V30AssetType = 'MINI_PROGRAM';
    public const ORANGE_EventManagerOptimizedGoalGetV2V30AssetType = 'ORANGE';
    public const QUICK_APP_EventManagerOptimizedGoalGetV2V30AssetType = 'QUICK_APP';
    public const THIRDPARTY_EventManagerOptimizedGoalGetV2V30AssetType = 'THIRDPARTY';
    public const WECHAT_APP_EventManagerOptimizedGoalGetV2V30AssetType = 'WECHAT_APP';

    public const ALLOWED_VALUES = [
        self::APP_EventManagerOptimizedGoalGetV2V30AssetType,
        self::AWEME_EventManagerOptimizedGoalGetV2V30AssetType,
        self::ENTERPRISE_EventManagerOptimizedGoalGetV2V30AssetType,
        self::MICRO_APP_EventManagerOptimizedGoalGetV2V30AssetType,
        self::MINI_PROGRAM_EventManagerOptimizedGoalGetV2V30AssetType,
        self::ORANGE_EventManagerOptimizedGoalGetV2V30AssetType,
        self::QUICK_APP_EventManagerOptimizedGoalGetV2V30AssetType,
        self::THIRDPARTY_EventManagerOptimizedGoalGetV2V30AssetType,
        self::WECHAT_APP_EventManagerOptimizedGoalGetV2V30AssetType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EventManagerOptimizedGoalGetV2V30AssetType', $value));
        }
        return (string) $value;
    }
}
