<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageCreateV2LandingType
{
    public const SHOP_AudiencePackageCreateV2LandingType = 'SHOP';
    public const APP_ANDROID_AudiencePackageCreateV2LandingType = 'APP_ANDROID';
    public const APP_IOS_AudiencePackageCreateV2LandingType = 'APP_IOS';
    public const APP_HARMONY_AudiencePackageCreateV2LandingType = 'APP_HARMONY';
    public const ARTICLE_AudiencePackageCreateV2LandingType = 'ARTICLE';
    public const AWEME_AudiencePackageCreateV2LandingType = 'AWEME';
    public const EXTERNAL_AudiencePackageCreateV2LandingType = 'EXTERNAL';
    public const DPA_AudiencePackageCreateV2LandingType = 'DPA';
    public const LIVE_AudiencePackageCreateV2LandingType = 'LIVE';
    public const MICRO_GAME_AudiencePackageCreateV2LandingType = 'MICRO_GAME';
    public const STORE_AudiencePackageCreateV2LandingType = 'STORE';
    public const GOODS_AudiencePackageCreateV2LandingType = 'GOODS';
    public const QUICK_APP_AudiencePackageCreateV2LandingType = 'QUICK_APP';

    public const ALLOWED_VALUES = [
        self::SHOP_AudiencePackageCreateV2LandingType,
        self::APP_ANDROID_AudiencePackageCreateV2LandingType,
        self::APP_IOS_AudiencePackageCreateV2LandingType,
        self::APP_HARMONY_AudiencePackageCreateV2LandingType,
        self::ARTICLE_AudiencePackageCreateV2LandingType,
        self::AWEME_AudiencePackageCreateV2LandingType,
        self::EXTERNAL_AudiencePackageCreateV2LandingType,
        self::DPA_AudiencePackageCreateV2LandingType,
        self::LIVE_AudiencePackageCreateV2LandingType,
        self::MICRO_GAME_AudiencePackageCreateV2LandingType,
        self::STORE_AudiencePackageCreateV2LandingType,
        self::GOODS_AudiencePackageCreateV2LandingType,
        self::QUICK_APP_AudiencePackageCreateV2LandingType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageCreateV2LandingType', $value));
        }
        return (string) $value;
    }
}
