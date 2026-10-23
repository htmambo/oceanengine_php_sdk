<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageGetV30FilteringLandingType
{
    public const APP_AudiencePackageGetV30FilteringLandingType = 'APP';
    public const APP_ANDROID_AudiencePackageGetV30FilteringLandingType = 'APP_ANDROID';
    public const APP_HARMONY_AudiencePackageGetV30FilteringLandingType = 'APP_HARMONY';
    public const APP_IOS_AudiencePackageGetV30FilteringLandingType = 'APP_IOS';
    public const ARTICLE_AudiencePackageGetV30FilteringLandingType = 'ARTICLE';
    public const AWEME_AudiencePackageGetV30FilteringLandingType = 'AWEME';
    public const DPA_AudiencePackageGetV30FilteringLandingType = 'DPA';
    public const EXTERNAL_AudiencePackageGetV30FilteringLandingType = 'EXTERNAL';
    public const GOODS_AudiencePackageGetV30FilteringLandingType = 'GOODS';
    public const LIVE_AudiencePackageGetV30FilteringLandingType = 'LIVE';
    public const MICRO_GAME_AudiencePackageGetV30FilteringLandingType = 'MICRO_GAME';
    public const QUICK_APP_AudiencePackageGetV30FilteringLandingType = 'QUICK_APP';
    public const SHOP_AudiencePackageGetV30FilteringLandingType = 'SHOP';
    public const STORE_AudiencePackageGetV30FilteringLandingType = 'STORE';

    public const ALLOWED_VALUES = [
        self::APP_AudiencePackageGetV30FilteringLandingType,
        self::APP_ANDROID_AudiencePackageGetV30FilteringLandingType,
        self::APP_HARMONY_AudiencePackageGetV30FilteringLandingType,
        self::APP_IOS_AudiencePackageGetV30FilteringLandingType,
        self::ARTICLE_AudiencePackageGetV30FilteringLandingType,
        self::AWEME_AudiencePackageGetV30FilteringLandingType,
        self::DPA_AudiencePackageGetV30FilteringLandingType,
        self::EXTERNAL_AudiencePackageGetV30FilteringLandingType,
        self::GOODS_AudiencePackageGetV30FilteringLandingType,
        self::LIVE_AudiencePackageGetV30FilteringLandingType,
        self::MICRO_GAME_AudiencePackageGetV30FilteringLandingType,
        self::QUICK_APP_AudiencePackageGetV30FilteringLandingType,
        self::SHOP_AudiencePackageGetV30FilteringLandingType,
        self::STORE_AudiencePackageGetV30FilteringLandingType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageGetV30FilteringLandingType', $value));
        }
        return (string) $value;
    }
}
