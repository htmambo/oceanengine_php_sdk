<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAdvertiserDiagnosisSuggestionGetV30DataSuggestionInfoListSuggestionCategory
{
    public const DELIVERY_IMPACT_ToolsAdvertiserDiagnosisSuggestionGetV30DataSuggestionInfoListSuggestionCategory = 'DELIVERY_IMPACT';
    public const DELIVERY_STUCK_ToolsAdvertiserDiagnosisSuggestionGetV30DataSuggestionInfoListSuggestionCategory = 'DELIVERY_STUCK';
    public const SUGGEST_OPTIMIZATION_ToolsAdvertiserDiagnosisSuggestionGetV30DataSuggestionInfoListSuggestionCategory = 'SUGGEST_OPTIMIZATION';

    public const ALLOWED_VALUES = [
        self::DELIVERY_IMPACT_ToolsAdvertiserDiagnosisSuggestionGetV30DataSuggestionInfoListSuggestionCategory,
        self::DELIVERY_STUCK_ToolsAdvertiserDiagnosisSuggestionGetV30DataSuggestionInfoListSuggestionCategory,
        self::SUGGEST_OPTIMIZATION_ToolsAdvertiserDiagnosisSuggestionGetV30DataSuggestionInfoListSuggestionCategory,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAdvertiserDiagnosisSuggestionGetV30DataSuggestionInfoListSuggestionCategory', $value));
        }
        return (string) $value;
    }
}
