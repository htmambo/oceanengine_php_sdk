<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectDetailV30DataIntelligentSelectionMode
{
    public const INTELLIGENT_SELECTION_MODE_OFF_LocalProjectDetailV30DataIntelligentSelectionMode = 'INTELLIGENT_SELECTION_MODE_OFF';
    public const INTELLIGENT_SELECTION_MODE_ON_LocalProjectDetailV30DataIntelligentSelectionMode = 'INTELLIGENT_SELECTION_MODE_ON';

    public const ALLOWED_VALUES = [
        self::INTELLIGENT_SELECTION_MODE_OFF_LocalProjectDetailV30DataIntelligentSelectionMode,
        self::INTELLIGENT_SELECTION_MODE_ON_LocalProjectDetailV30DataIntelligentSelectionMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectDetailV30DataIntelligentSelectionMode', $value));
        }
        return (string) $value;
    }
}
