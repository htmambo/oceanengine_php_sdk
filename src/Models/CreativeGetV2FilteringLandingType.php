<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CreativeGetV2FilteringLandingType
{
    public const APP_CreativeGetV2FilteringLandingType = 'APP';
    public const ARTICLE_CreativeGetV2FilteringLandingType = 'ARTICLE';
    public const AWEME_CreativeGetV2FilteringLandingType = 'AWEME';
    public const BRAND_EXTERNAL_CreativeGetV2FilteringLandingType = 'BRAND_EXTERNAL';
    public const DPA_CreativeGetV2FilteringLandingType = 'DPA';
    public const GOODS_CreativeGetV2FilteringLandingType = 'GOODS';
    public const LINK_CreativeGetV2FilteringLandingType = 'LINK';
    public const LIVE_CreativeGetV2FilteringLandingType = 'LIVE';
    public const MICRO_GAME_CreativeGetV2FilteringLandingType = 'MICRO_GAME';
    public const QUICK_APP_CreativeGetV2FilteringLandingType = 'QUICK_APP';
    public const SHOP_CreativeGetV2FilteringLandingType = 'SHOP';
    public const STORE_CreativeGetV2FilteringLandingType = 'STORE';

    public const ALLOWED_VALUES = [
        self::APP_CreativeGetV2FilteringLandingType,
        self::ARTICLE_CreativeGetV2FilteringLandingType,
        self::AWEME_CreativeGetV2FilteringLandingType,
        self::BRAND_EXTERNAL_CreativeGetV2FilteringLandingType,
        self::DPA_CreativeGetV2FilteringLandingType,
        self::GOODS_CreativeGetV2FilteringLandingType,
        self::LINK_CreativeGetV2FilteringLandingType,
        self::LIVE_CreativeGetV2FilteringLandingType,
        self::MICRO_GAME_CreativeGetV2FilteringLandingType,
        self::QUICK_APP_CreativeGetV2FilteringLandingType,
        self::SHOP_CreativeGetV2FilteringLandingType,
        self::STORE_CreativeGetV2FilteringLandingType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CreativeGetV2FilteringLandingType', $value));
        }
        return (string) $value;
    }
}
