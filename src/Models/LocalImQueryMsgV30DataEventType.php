<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalImQueryMsgV30DataEventType
{
    public const CLOSE_CONVERSATION_LocalImQueryMsgV30DataEventType = 'CLOSE_CONVERSATION';
    public const ENTER_CONVERSATION_LocalImQueryMsgV30DataEventType = 'ENTER_CONVERSATION';
    public const RECEIVE_SIDE_B_MESSAGE_LocalImQueryMsgV30DataEventType = 'RECEIVE_SIDE_B_MESSAGE';
    public const RECEIVE_SIDE_C_MESSAGE_LocalImQueryMsgV30DataEventType = 'RECEIVE_SIDE_C_MESSAGE';
    public const RECEIVE_SYSTEM_MESSAGE_LocalImQueryMsgV30DataEventType = 'RECEIVE_SYSTEM_MESSAGE';

    public const ALLOWED_VALUES = [
        self::CLOSE_CONVERSATION_LocalImQueryMsgV30DataEventType,
        self::ENTER_CONVERSATION_LocalImQueryMsgV30DataEventType,
        self::RECEIVE_SIDE_B_MESSAGE_LocalImQueryMsgV30DataEventType,
        self::RECEIVE_SIDE_C_MESSAGE_LocalImQueryMsgV30DataEventType,
        self::RECEIVE_SYSTEM_MESSAGE_LocalImQueryMsgV30DataEventType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalImQueryMsgV30DataEventType', $value));
        }
        return (string) $value;
    }
}
