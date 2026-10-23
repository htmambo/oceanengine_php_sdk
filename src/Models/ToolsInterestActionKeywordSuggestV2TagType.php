<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsInterestActionKeywordSuggestV2TagType
{
    public const CATEGORY_ToolsInterestActionKeywordSuggestV2TagType = 'CATEGORY';
    public const KEYWORD_ToolsInterestActionKeywordSuggestV2TagType = 'KEYWORD';

    public const ALLOWED_VALUES = [
        self::CATEGORY_ToolsInterestActionKeywordSuggestV2TagType,
        self::KEYWORD_ToolsInterestActionKeywordSuggestV2TagType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsInterestActionKeywordSuggestV2TagType', $value));
        }
        return (string) $value;
    }
}
