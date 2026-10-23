<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsInterestActionId2wordV2TargetingType
{
    public const ACTION_ToolsInterestActionId2wordV2TargetingType = 'ACTION';
    public const INTEREST_ToolsInterestActionId2wordV2TargetingType = 'INTEREST';

    public const ALLOWED_VALUES = [
        self::ACTION_ToolsInterestActionId2wordV2TargetingType,
        self::INTEREST_ToolsInterestActionId2wordV2TargetingType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsInterestActionId2wordV2TargetingType', $value));
        }
        return (string) $value;
    }
}
