<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EventManagerDbtGetV30LandingType
{
    public const APP_EventManagerDbtGetV30LandingType = 'APP';
    public const DPA_EventManagerDbtGetV30LandingType = 'DPA';
    public const LINK_EventManagerDbtGetV30LandingType = 'LINK';
    public const MICRO_GAME_EventManagerDbtGetV30LandingType = 'MICRO_GAME';
    public const QUICK_APP_EventManagerDbtGetV30LandingType = 'QUICK_APP';
    public const SHOP_EventManagerDbtGetV30LandingType = 'SHOP';

    public const ALLOWED_VALUES = [
        self::APP_EventManagerDbtGetV30LandingType,
        self::DPA_EventManagerDbtGetV30LandingType,
        self::LINK_EventManagerDbtGetV30LandingType,
        self::MICRO_GAME_EventManagerDbtGetV30LandingType,
        self::QUICK_APP_EventManagerDbtGetV30LandingType,
        self::SHOP_EventManagerDbtGetV30LandingType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EventManagerDbtGetV30LandingType', $value));
        }
        return (string) $value;
    }
}
