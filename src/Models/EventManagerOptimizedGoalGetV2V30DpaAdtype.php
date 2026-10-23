<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EventManagerOptimizedGoalGetV2V30DpaAdtype
{
    public const DPA_APP_EventManagerOptimizedGoalGetV2V30DpaAdtype = 'DPA_APP';
    public const DPA_LINK_EventManagerOptimizedGoalGetV2V30DpaAdtype = 'DPA_LINK';

    public const ALLOWED_VALUES = [
        self::DPA_APP_EventManagerOptimizedGoalGetV2V30DpaAdtype,
        self::DPA_LINK_EventManagerOptimizedGoalGetV2V30DpaAdtype,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EventManagerOptimizedGoalGetV2V30DpaAdtype', $value));
        }
        return (string) $value;
    }
}
