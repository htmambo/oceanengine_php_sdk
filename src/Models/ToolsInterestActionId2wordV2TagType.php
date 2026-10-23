<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsInterestActionId2wordV2TagType
{
    public const CATEGORY_ToolsInterestActionId2wordV2TagType = 'CATEGORY';
    public const KEYWORD_ToolsInterestActionId2wordV2TagType = 'KEYWORD';

    public const ALLOWED_VALUES = [
        self::CATEGORY_ToolsInterestActionId2wordV2TagType,
        self::KEYWORD_ToolsInterestActionId2wordV2TagType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsInterestActionId2wordV2TagType', $value));
        }
        return (string) $value;
    }
}
