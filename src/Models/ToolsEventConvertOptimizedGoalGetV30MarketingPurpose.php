<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEventConvertOptimizedGoalGetV30MarketingPurpose
{
    public const ACKNOWLEDGE_ToolsEventConvertOptimizedGoalGetV30MarketingPurpose = 'ACKNOWLEDGE';
    public const CONVERSION_ToolsEventConvertOptimizedGoalGetV30MarketingPurpose = 'CONVERSION';
    public const INTENTION_ToolsEventConvertOptimizedGoalGetV30MarketingPurpose = 'INTENTION';

    public const ALLOWED_VALUES = [
        self::ACKNOWLEDGE_ToolsEventConvertOptimizedGoalGetV30MarketingPurpose,
        self::CONVERSION_ToolsEventConvertOptimizedGoalGetV30MarketingPurpose,
        self::INTENTION_ToolsEventConvertOptimizedGoalGetV30MarketingPurpose,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEventConvertOptimizedGoalGetV30MarketingPurpose', $value));
        }
        return (string) $value;
    }
}
