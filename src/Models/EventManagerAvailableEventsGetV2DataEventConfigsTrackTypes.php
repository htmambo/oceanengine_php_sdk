<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EventManagerAvailableEventsGetV2DataEventConfigsTrackTypes
{
    public const JSSDK_EventManagerAvailableEventsGetV2DataEventConfigsTrackTypes = 'JSSDK';
    public const XPATH_EventManagerAvailableEventsGetV2DataEventConfigsTrackTypes = 'XPATH';
    public const APPLICATION_API_EventManagerAvailableEventsGetV2DataEventConfigsTrackTypes = 'APPLICATION_API';
    public const EXTERNAL_API_EventManagerAvailableEventsGetV2DataEventConfigsTrackTypes = 'EXTERNAL_API';
    public const APPLICATION_SDK_EventManagerAvailableEventsGetV2DataEventConfigsTrackTypes = 'APPLICATION_SDK';
    public const MINI_PROGRAME_SDK_EventManagerAvailableEventsGetV2DataEventConfigsTrackTypes = 'MINI_PROGRAME_SDK';
    public const MINI_PROGRAME_API_EventManagerAvailableEventsGetV2DataEventConfigsTrackTypes = 'MINI_PROGRAME_API';
    public const OFFLINE_CALLBACK_EventManagerAvailableEventsGetV2DataEventConfigsTrackTypes = 'OFFLINE_CALLBACK';
    public const OFFLINE_API_EventManagerAvailableEventsGetV2DataEventConfigsTrackTypes = 'OFFLINE_API';
    public const APPLOG_EventManagerAvailableEventsGetV2DataEventConfigsTrackTypes = 'APPLOG';
    public const TETRIS_EventManagerAvailableEventsGetV2DataEventConfigsTrackTypes = 'TETRIS';
    public const TETRIS_FE_EventManagerAvailableEventsGetV2DataEventConfigsTrackTypes = 'TETRIS_FE';
    public const FLY_FISH_EventManagerAvailableEventsGetV2DataEventConfigsTrackTypes = 'FLY_FISH';
    public const E_CHAT_EventManagerAvailableEventsGetV2DataEventConfigsTrackTypes = 'E_CHAT';
    public const QUICK_APP_API_EventManagerAvailableEventsGetV2DataEventConfigsTrackTypes = 'QUICK_APP_API';
    public const CLUE_COMPONENT_EventManagerAvailableEventsGetV2DataEventConfigsTrackTypes = 'CLUE_COMPONENT';

    public const ALLOWED_VALUES = [
        self::JSSDK_EventManagerAvailableEventsGetV2DataEventConfigsTrackTypes,
        self::XPATH_EventManagerAvailableEventsGetV2DataEventConfigsTrackTypes,
        self::APPLICATION_API_EventManagerAvailableEventsGetV2DataEventConfigsTrackTypes,
        self::EXTERNAL_API_EventManagerAvailableEventsGetV2DataEventConfigsTrackTypes,
        self::APPLICATION_SDK_EventManagerAvailableEventsGetV2DataEventConfigsTrackTypes,
        self::MINI_PROGRAME_SDK_EventManagerAvailableEventsGetV2DataEventConfigsTrackTypes,
        self::MINI_PROGRAME_API_EventManagerAvailableEventsGetV2DataEventConfigsTrackTypes,
        self::OFFLINE_CALLBACK_EventManagerAvailableEventsGetV2DataEventConfigsTrackTypes,
        self::OFFLINE_API_EventManagerAvailableEventsGetV2DataEventConfigsTrackTypes,
        self::APPLOG_EventManagerAvailableEventsGetV2DataEventConfigsTrackTypes,
        self::TETRIS_EventManagerAvailableEventsGetV2DataEventConfigsTrackTypes,
        self::TETRIS_FE_EventManagerAvailableEventsGetV2DataEventConfigsTrackTypes,
        self::FLY_FISH_EventManagerAvailableEventsGetV2DataEventConfigsTrackTypes,
        self::E_CHAT_EventManagerAvailableEventsGetV2DataEventConfigsTrackTypes,
        self::QUICK_APP_API_EventManagerAvailableEventsGetV2DataEventConfigsTrackTypes,
        self::CLUE_COMPONENT_EventManagerAvailableEventsGetV2DataEventConfigsTrackTypes,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EventManagerAvailableEventsGetV2DataEventConfigsTrackTypes', $value));
        }
        return (string) $value;
    }
}
