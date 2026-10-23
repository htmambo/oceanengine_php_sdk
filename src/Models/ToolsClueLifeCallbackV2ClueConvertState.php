<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsClueLifeCallbackV2ClueConvertState
{
    public const ARRIVAL_ToolsClueLifeCallbackV2ClueConvertState = 'ARRIVAL';
    public const CLUE_CONFIRM_ToolsClueLifeCallbackV2ClueConvertState = 'CLUE_CONFIRM';
    public const CLUE_HIGH_INTENTION_ToolsClueLifeCallbackV2ClueConvertState = 'CLUE_HIGH_INTENTION';
    public const CONVERSION_CLASS_ToolsClueLifeCallbackV2ClueConvertState = 'CONVERSION_CLASS';
    public const INVALID_EVENT_ToolsClueLifeCallbackV2ClueConvertState = 'INVALID_EVENT';

    public const ALLOWED_VALUES = [
        self::ARRIVAL_ToolsClueLifeCallbackV2ClueConvertState,
        self::CLUE_CONFIRM_ToolsClueLifeCallbackV2ClueConvertState,
        self::CLUE_HIGH_INTENTION_ToolsClueLifeCallbackV2ClueConvertState,
        self::CONVERSION_CLASS_ToolsClueLifeCallbackV2ClueConvertState,
        self::INVALID_EVENT_ToolsClueLifeCallbackV2ClueConvertState,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsClueLifeCallbackV2ClueConvertState', $value));
        }
        return (string) $value;
    }
}
