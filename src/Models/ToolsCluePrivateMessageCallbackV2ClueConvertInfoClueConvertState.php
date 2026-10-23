<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsCluePrivateMessageCallbackV2ClueConvertInfoClueConvertState
{
    public const NEW_CLUE_ToolsCluePrivateMessageCallbackV2ClueConvertInfoClueConvertState = 'NEW_CLUE';
    public const INVALID_ToolsCluePrivateMessageCallbackV2ClueConvertInfoClueConvertState = 'INVALID';
    public const CONFIRM_ToolsCluePrivateMessageCallbackV2ClueConvertInfoClueConvertState = 'CONFIRM';
    public const VX_ToolsCluePrivateMessageCallbackV2ClueConvertInfoClueConvertState = 'VX';
    public const ARRIVAL_ToolsCluePrivateMessageCallbackV2ClueConvertInfoClueConvertState = 'ARRIVAL';
    public const DEAL_ToolsCluePrivateMessageCallbackV2ClueConvertInfoClueConvertState = 'DEAL';
    public const CLUE_CONFIRM_ToolsCluePrivateMessageCallbackV2ClueConvertInfoClueConvertState = 'CLUE_CONFIRM';
    public const CLUE_HIGH_INTENTION_ToolsCluePrivateMessageCallbackV2ClueConvertInfoClueConvertState = 'CLUE_HIGH_INTENTION';

    public const ALLOWED_VALUES = [
        self::NEW_CLUE_ToolsCluePrivateMessageCallbackV2ClueConvertInfoClueConvertState,
        self::INVALID_ToolsCluePrivateMessageCallbackV2ClueConvertInfoClueConvertState,
        self::CONFIRM_ToolsCluePrivateMessageCallbackV2ClueConvertInfoClueConvertState,
        self::VX_ToolsCluePrivateMessageCallbackV2ClueConvertInfoClueConvertState,
        self::ARRIVAL_ToolsCluePrivateMessageCallbackV2ClueConvertInfoClueConvertState,
        self::DEAL_ToolsCluePrivateMessageCallbackV2ClueConvertInfoClueConvertState,
        self::CLUE_CONFIRM_ToolsCluePrivateMessageCallbackV2ClueConvertInfoClueConvertState,
        self::CLUE_HIGH_INTENTION_ToolsCluePrivateMessageCallbackV2ClueConvertInfoClueConvertState,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsCluePrivateMessageCallbackV2ClueConvertInfoClueConvertState', $value));
        }
        return (string) $value;
    }
}
