<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsPromotionDiagnosisSuggestionGetV30DataSuggestionListSceneListScene
{
    public const CLEAN_ToolsPromotionDiagnosisSuggestionGetV30DataSuggestionListSceneListScene = 'CLEAN';
    public const POTENTIAL_ToolsPromotionDiagnosisSuggestionGetV30DataSuggestionListSceneListScene = 'POTENTIAL';
    public const ZOMBIE_ToolsPromotionDiagnosisSuggestionGetV30DataSuggestionListSceneListScene = 'ZOMBIE';

    public const ALLOWED_VALUES = [
        self::CLEAN_ToolsPromotionDiagnosisSuggestionGetV30DataSuggestionListSceneListScene,
        self::POTENTIAL_ToolsPromotionDiagnosisSuggestionGetV30DataSuggestionListSceneListScene,
        self::ZOMBIE_ToolsPromotionDiagnosisSuggestionGetV30DataSuggestionListSceneListScene,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsPromotionDiagnosisSuggestionGetV30DataSuggestionListSceneListScene', $value));
        }
        return (string) $value;
    }
}
