<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsPromotionDiagnosisSuggestionGetV30DataSuggestionListSceneListSuggestionsToolType
{
    public const ACTION_ToolsPromotionDiagnosisSuggestionGetV30DataSuggestionListSceneListSuggestionsToolType = 'ACTION';
    public const TEXT_ToolsPromotionDiagnosisSuggestionGetV30DataSuggestionListSceneListSuggestionsToolType = 'TEXT';

    public const ALLOWED_VALUES = [
        self::ACTION_ToolsPromotionDiagnosisSuggestionGetV30DataSuggestionListSceneListSuggestionsToolType,
        self::TEXT_ToolsPromotionDiagnosisSuggestionGetV30DataSuggestionListSceneListSuggestionsToolType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsPromotionDiagnosisSuggestionGetV30DataSuggestionListSceneListSuggestionsToolType', $value));
        }
        return (string) $value;
    }
}
