<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EventManagerDeepBidTypeGetV30LandingType
{
    public const APP_EventManagerDeepBidTypeGetV30LandingType = 'APP';
    public const ARTICLE_EventManagerDeepBidTypeGetV30LandingType = 'ARTICLE';
    public const BRAND_EXTERNAL_EventManagerDeepBidTypeGetV30LandingType = 'BRAND_EXTERNAL';
    public const DPA_EventManagerDeepBidTypeGetV30LandingType = 'DPA';
    public const GOODS_EventManagerDeepBidTypeGetV30LandingType = 'GOODS';
    public const LINK_EventManagerDeepBidTypeGetV30LandingType = 'LINK';
    public const LIVE_EventManagerDeepBidTypeGetV30LandingType = 'LIVE';
    public const MICRO_GAME_EventManagerDeepBidTypeGetV30LandingType = 'MICRO_GAME';
    public const NATIVE_ACTION_EventManagerDeepBidTypeGetV30LandingType = 'NATIVE_ACTION';
    public const QUICK_APP_EventManagerDeepBidTypeGetV30LandingType = 'QUICK_APP';
    public const SHOP_EventManagerDeepBidTypeGetV30LandingType = 'SHOP';
    public const STORE_EventManagerDeepBidTypeGetV30LandingType = 'STORE';

    public const ALLOWED_VALUES = [
        self::APP_EventManagerDeepBidTypeGetV30LandingType,
        self::ARTICLE_EventManagerDeepBidTypeGetV30LandingType,
        self::BRAND_EXTERNAL_EventManagerDeepBidTypeGetV30LandingType,
        self::DPA_EventManagerDeepBidTypeGetV30LandingType,
        self::GOODS_EventManagerDeepBidTypeGetV30LandingType,
        self::LINK_EventManagerDeepBidTypeGetV30LandingType,
        self::LIVE_EventManagerDeepBidTypeGetV30LandingType,
        self::MICRO_GAME_EventManagerDeepBidTypeGetV30LandingType,
        self::NATIVE_ACTION_EventManagerDeepBidTypeGetV30LandingType,
        self::QUICK_APP_EventManagerDeepBidTypeGetV30LandingType,
        self::SHOP_EventManagerDeepBidTypeGetV30LandingType,
        self::STORE_EventManagerDeepBidTypeGetV30LandingType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EventManagerDeepBidTypeGetV30LandingType', $value));
        }
        return (string) $value;
    }
}
