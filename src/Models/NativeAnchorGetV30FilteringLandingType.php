<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class NativeAnchorGetV30FilteringLandingType
{
    public const APP_NativeAnchorGetV30FilteringLandingType = 'APP';
    public const ARTICLE_NativeAnchorGetV30FilteringLandingType = 'ARTICLE';
    public const AWEME_NativeAnchorGetV30FilteringLandingType = 'AWEME';
    public const BRAND_EXTERNAL_NativeAnchorGetV30FilteringLandingType = 'BRAND_EXTERNAL';
    public const DPA_NativeAnchorGetV30FilteringLandingType = 'DPA';
    public const GOODS_NativeAnchorGetV30FilteringLandingType = 'GOODS';
    public const LINK_NativeAnchorGetV30FilteringLandingType = 'LINK';
    public const LIVE_NativeAnchorGetV30FilteringLandingType = 'LIVE';
    public const MICRO_GAME_NativeAnchorGetV30FilteringLandingType = 'MICRO_GAME';
    public const QUICK_APP_NativeAnchorGetV30FilteringLandingType = 'QUICK_APP';
    public const SHOP_NativeAnchorGetV30FilteringLandingType = 'SHOP';
    public const STORE_NativeAnchorGetV30FilteringLandingType = 'STORE';

    public const ALLOWED_VALUES = [
        self::APP_NativeAnchorGetV30FilteringLandingType,
        self::ARTICLE_NativeAnchorGetV30FilteringLandingType,
        self::AWEME_NativeAnchorGetV30FilteringLandingType,
        self::BRAND_EXTERNAL_NativeAnchorGetV30FilteringLandingType,
        self::DPA_NativeAnchorGetV30FilteringLandingType,
        self::GOODS_NativeAnchorGetV30FilteringLandingType,
        self::LINK_NativeAnchorGetV30FilteringLandingType,
        self::LIVE_NativeAnchorGetV30FilteringLandingType,
        self::MICRO_GAME_NativeAnchorGetV30FilteringLandingType,
        self::QUICK_APP_NativeAnchorGetV30FilteringLandingType,
        self::SHOP_NativeAnchorGetV30FilteringLandingType,
        self::STORE_NativeAnchorGetV30FilteringLandingType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum NativeAnchorGetV30FilteringLandingType', $value));
        }
        return (string) $value;
    }
}
