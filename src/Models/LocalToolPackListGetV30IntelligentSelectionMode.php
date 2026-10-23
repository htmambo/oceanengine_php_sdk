<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalToolPackListGetV30IntelligentSelectionMode
{
    public const INTELLIGENT_SELECTION_MODE_OFF_LocalToolPackListGetV30IntelligentSelectionMode = 'INTELLIGENT_SELECTION_MODE_OFF';
    public const INTELLIGENT_SELECTION_MODE_ON_LocalToolPackListGetV30IntelligentSelectionMode = 'INTELLIGENT_SELECTION_MODE_ON';

    public const ALLOWED_VALUES = [
        self::INTELLIGENT_SELECTION_MODE_OFF_LocalToolPackListGetV30IntelligentSelectionMode,
        self::INTELLIGENT_SELECTION_MODE_ON_LocalToolPackListGetV30IntelligentSelectionMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalToolPackListGetV30IntelligentSelectionMode', $value));
        }
        return (string) $value;
    }
}
