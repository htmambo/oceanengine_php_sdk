<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EventManagerDbtGetV30DeliveryMedium
{
    public const APP_EventManagerDbtGetV30DeliveryMedium = 'APP';
    public const AWEME_EventManagerDbtGetV30DeliveryMedium = 'AWEME';
    public const BYTE_APP_EventManagerDbtGetV30DeliveryMedium = 'BYTE_APP';
    public const BYTE_GAME_EventManagerDbtGetV30DeliveryMedium = 'BYTE_GAME';
    public const ENTERPRISE_EventManagerDbtGetV30DeliveryMedium = 'ENTERPRISE';
    public const ORANGE_EventManagerDbtGetV30DeliveryMedium = 'ORANGE';
    public const QUICK_APP_EventManagerDbtGetV30DeliveryMedium = 'QUICK_APP';
    public const THIRDPARTY_EventManagerDbtGetV30DeliveryMedium = 'THIRDPARTY';
    public const WECHAT_APP_EventManagerDbtGetV30DeliveryMedium = 'WECHAT_APP';
    public const WECHAT_GAME_EventManagerDbtGetV30DeliveryMedium = 'WECHAT_GAME';

    public const ALLOWED_VALUES = [
        self::APP_EventManagerDbtGetV30DeliveryMedium,
        self::AWEME_EventManagerDbtGetV30DeliveryMedium,
        self::BYTE_APP_EventManagerDbtGetV30DeliveryMedium,
        self::BYTE_GAME_EventManagerDbtGetV30DeliveryMedium,
        self::ENTERPRISE_EventManagerDbtGetV30DeliveryMedium,
        self::ORANGE_EventManagerDbtGetV30DeliveryMedium,
        self::QUICK_APP_EventManagerDbtGetV30DeliveryMedium,
        self::THIRDPARTY_EventManagerDbtGetV30DeliveryMedium,
        self::WECHAT_APP_EventManagerDbtGetV30DeliveryMedium,
        self::WECHAT_GAME_EventManagerDbtGetV30DeliveryMedium,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EventManagerDbtGetV30DeliveryMedium', $value));
        }
        return (string) $value;
    }
}
