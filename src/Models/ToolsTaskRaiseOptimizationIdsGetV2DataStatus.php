<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsTaskRaiseOptimizationIdsGetV2DataStatus
{
    public const DISABLERAISE_ToolsTaskRaiseOptimizationIdsGetV2DataStatus = 'DISABLERAISE';
    public const ENABLERAISE_ToolsTaskRaiseOptimizationIdsGetV2DataStatus = 'ENABLERAISE';
    public const RAISING_ToolsTaskRaiseOptimizationIdsGetV2DataStatus = 'RAISING';

    public const ALLOWED_VALUES = [
        self::DISABLERAISE_ToolsTaskRaiseOptimizationIdsGetV2DataStatus,
        self::ENABLERAISE_ToolsTaskRaiseOptimizationIdsGetV2DataStatus,
        self::RAISING_ToolsTaskRaiseOptimizationIdsGetV2DataStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsTaskRaiseOptimizationIdsGetV2DataStatus', $value));
        }
        return (string) $value;
    }
}
