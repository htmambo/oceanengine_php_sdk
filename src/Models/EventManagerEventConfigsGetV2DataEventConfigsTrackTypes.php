<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EventManagerEventConfigsGetV2DataEventConfigsTrackTypes
{
    public const JSSDK_EventManagerEventConfigsGetV2DataEventConfigsTrackTypes = 'JSSDK';
    public const XPATH_EventManagerEventConfigsGetV2DataEventConfigsTrackTypes = 'XPATH';
    public const APPLICATION_API_EventManagerEventConfigsGetV2DataEventConfigsTrackTypes = 'APPLICATION_API';
    public const EXTERNAL_API_EventManagerEventConfigsGetV2DataEventConfigsTrackTypes = 'EXTERNAL_API';
    public const APPLICATION_SDK_EventManagerEventConfigsGetV2DataEventConfigsTrackTypes = 'APPLICATION_SDK';
    public const MINI_PROGRAME_SDK_EventManagerEventConfigsGetV2DataEventConfigsTrackTypes = 'MINI_PROGRAME_SDK';
    public const MINI_PROGRAME_API_EventManagerEventConfigsGetV2DataEventConfigsTrackTypes = 'MINI_PROGRAME_API';
    public const OFFLINE_CALLBACK_EventManagerEventConfigsGetV2DataEventConfigsTrackTypes = 'OFFLINE_CALLBACK';
    public const OFFLINE_API_EventManagerEventConfigsGetV2DataEventConfigsTrackTypes = 'OFFLINE_API';
    public const APPLOG_EventManagerEventConfigsGetV2DataEventConfigsTrackTypes = 'APPLOG';
    public const TETRIS_EventManagerEventConfigsGetV2DataEventConfigsTrackTypes = 'TETRIS';
    public const TETRIS_FE_EventManagerEventConfigsGetV2DataEventConfigsTrackTypes = 'TETRIS_FE';
    public const FLY_FISH_EventManagerEventConfigsGetV2DataEventConfigsTrackTypes = 'FLY_FISH';
    public const E_CHAT_EventManagerEventConfigsGetV2DataEventConfigsTrackTypes = 'E_CHAT';
    public const QUICK_APP_API_EventManagerEventConfigsGetV2DataEventConfigsTrackTypes = 'QUICK_APP_API';

    public const ALLOWED_VALUES = [
        self::JSSDK_EventManagerEventConfigsGetV2DataEventConfigsTrackTypes,
        self::XPATH_EventManagerEventConfigsGetV2DataEventConfigsTrackTypes,
        self::APPLICATION_API_EventManagerEventConfigsGetV2DataEventConfigsTrackTypes,
        self::EXTERNAL_API_EventManagerEventConfigsGetV2DataEventConfigsTrackTypes,
        self::APPLICATION_SDK_EventManagerEventConfigsGetV2DataEventConfigsTrackTypes,
        self::MINI_PROGRAME_SDK_EventManagerEventConfigsGetV2DataEventConfigsTrackTypes,
        self::MINI_PROGRAME_API_EventManagerEventConfigsGetV2DataEventConfigsTrackTypes,
        self::OFFLINE_CALLBACK_EventManagerEventConfigsGetV2DataEventConfigsTrackTypes,
        self::OFFLINE_API_EventManagerEventConfigsGetV2DataEventConfigsTrackTypes,
        self::APPLOG_EventManagerEventConfigsGetV2DataEventConfigsTrackTypes,
        self::TETRIS_EventManagerEventConfigsGetV2DataEventConfigsTrackTypes,
        self::TETRIS_FE_EventManagerEventConfigsGetV2DataEventConfigsTrackTypes,
        self::FLY_FISH_EventManagerEventConfigsGetV2DataEventConfigsTrackTypes,
        self::E_CHAT_EventManagerEventConfigsGetV2DataEventConfigsTrackTypes,
        self::QUICK_APP_API_EventManagerEventConfigsGetV2DataEventConfigsTrackTypes,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EventManagerEventConfigsGetV2DataEventConfigsTrackTypes', $value));
        }
        return (string) $value;
    }
}
