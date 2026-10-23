<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsPromotionDiagnosisSuggestionGetV30Scenes
{
    public const CLEAN_ToolsPromotionDiagnosisSuggestionGetV30Scenes = 'CLEAN';
    public const POTENTIAL_ToolsPromotionDiagnosisSuggestionGetV30Scenes = 'POTENTIAL';
    public const ZOMBIE_ToolsPromotionDiagnosisSuggestionGetV30Scenes = 'ZOMBIE';

    public const ALLOWED_VALUES = [
        self::CLEAN_ToolsPromotionDiagnosisSuggestionGetV30Scenes,
        self::POTENTIAL_ToolsPromotionDiagnosisSuggestionGetV30Scenes,
        self::ZOMBIE_ToolsPromotionDiagnosisSuggestionGetV30Scenes,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsPromotionDiagnosisSuggestionGetV30Scenes', $value));
        }
        return (string) $value;
    }
}
