<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAdvertiserDiagnosisSuggestionGetV30DataSuggestionInfoListSuggestionType
{
    public const SEVEN_DAYS_ROI_SUGGESTION_ToolsAdvertiserDiagnosisSuggestionGetV30DataSuggestionInfoListSuggestionType = 'SEVEN_DAYS_ROI_SUGGESTION';

    public const ALLOWED_VALUES = [
        self::SEVEN_DAYS_ROI_SUGGESTION_ToolsAdvertiserDiagnosisSuggestionGetV30DataSuggestionInfoListSuggestionType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAdvertiserDiagnosisSuggestionGetV30DataSuggestionInfoListSuggestionType', $value));
        }
        return (string) $value;
    }
}
