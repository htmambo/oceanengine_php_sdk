<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EventManagerEventsCreateV2TrackTypes
{
    public const JSSDK_EventManagerEventsCreateV2TrackTypes = 'JSSDK';
    public const XPATH_EventManagerEventsCreateV2TrackTypes = 'XPATH';
    public const APPLICATION_API_EventManagerEventsCreateV2TrackTypes = 'APPLICATION_API';
    public const EXTERNAL_API_EventManagerEventsCreateV2TrackTypes = 'EXTERNAL_API';
    public const APPLICATION_SDK_EventManagerEventsCreateV2TrackTypes = 'APPLICATION_SDK';
    public const MINI_PROGRAME_SDK_EventManagerEventsCreateV2TrackTypes = 'MINI_PROGRAME_SDK';
    public const MINI_PROGRAME_API_EventManagerEventsCreateV2TrackTypes = 'MINI_PROGRAME_API';
    public const OFFLINE_CALLBACK_EventManagerEventsCreateV2TrackTypes = 'OFFLINE_CALLBACK';
    public const OFFLINE_API_EventManagerEventsCreateV2TrackTypes = 'OFFLINE_API';
    public const APPLOG_EventManagerEventsCreateV2TrackTypes = 'APPLOG';
    public const TETRIS_EventManagerEventsCreateV2TrackTypes = 'TETRIS';
    public const TETRIS_FE_EventManagerEventsCreateV2TrackTypes = 'TETRIS_FE';
    public const FLY_FISH_EventManagerEventsCreateV2TrackTypes = 'FLY_FISH';
    public const E_CHAT_EventManagerEventsCreateV2TrackTypes = 'E_CHAT';
    public const QUICK_APP_API_EventManagerEventsCreateV2TrackTypes = 'QUICK_APP_API';

    public const ALLOWED_VALUES = [
        self::JSSDK_EventManagerEventsCreateV2TrackTypes,
        self::XPATH_EventManagerEventsCreateV2TrackTypes,
        self::APPLICATION_API_EventManagerEventsCreateV2TrackTypes,
        self::EXTERNAL_API_EventManagerEventsCreateV2TrackTypes,
        self::APPLICATION_SDK_EventManagerEventsCreateV2TrackTypes,
        self::MINI_PROGRAME_SDK_EventManagerEventsCreateV2TrackTypes,
        self::MINI_PROGRAME_API_EventManagerEventsCreateV2TrackTypes,
        self::OFFLINE_CALLBACK_EventManagerEventsCreateV2TrackTypes,
        self::OFFLINE_API_EventManagerEventsCreateV2TrackTypes,
        self::APPLOG_EventManagerEventsCreateV2TrackTypes,
        self::TETRIS_EventManagerEventsCreateV2TrackTypes,
        self::TETRIS_FE_EventManagerEventsCreateV2TrackTypes,
        self::FLY_FISH_EventManagerEventsCreateV2TrackTypes,
        self::E_CHAT_EventManagerEventsCreateV2TrackTypes,
        self::QUICK_APP_API_EventManagerEventsCreateV2TrackTypes,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EventManagerEventsCreateV2TrackTypes', $value));
        }
        return (string) $value;
    }
}
