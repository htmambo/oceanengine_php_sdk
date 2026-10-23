<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsInterestActionKeywordSuggestV2TargetingType
{
    public const ACTION_ToolsInterestActionKeywordSuggestV2TargetingType = 'ACTION';
    public const INTEREST_ToolsInterestActionKeywordSuggestV2TargetingType = 'INTEREST';

    public const ALLOWED_VALUES = [
        self::ACTION_ToolsInterestActionKeywordSuggestV2TargetingType,
        self::INTEREST_ToolsInterestActionKeywordSuggestV2TargetingType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsInterestActionKeywordSuggestV2TargetingType', $value));
        }
        return (string) $value;
    }
}
