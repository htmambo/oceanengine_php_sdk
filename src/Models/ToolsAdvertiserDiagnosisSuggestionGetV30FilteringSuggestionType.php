<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAdvertiserDiagnosisSuggestionGetV30FilteringSuggestionType
{
    public const SEVEN_DAYS_ROI_SUGGESTION_ToolsAdvertiserDiagnosisSuggestionGetV30FilteringSuggestionType = 'SEVEN_DAYS_ROI_SUGGESTION';

    public const ALLOWED_VALUES = [
        self::SEVEN_DAYS_ROI_SUGGESTION_ToolsAdvertiserDiagnosisSuggestionGetV30FilteringSuggestionType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAdvertiserDiagnosisSuggestionGetV30FilteringSuggestionType', $value));
        }
        return (string) $value;
    }
}
