<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageGetV30DataAudiencePackagesLandingType
{
    public const APP_AudiencePackageGetV30DataAudiencePackagesLandingType = 'APP';
    public const APP_ANDROID_AudiencePackageGetV30DataAudiencePackagesLandingType = 'APP_ANDROID';
    public const APP_HARMONY_AudiencePackageGetV30DataAudiencePackagesLandingType = 'APP_HARMONY';
    public const APP_IOS_AudiencePackageGetV30DataAudiencePackagesLandingType = 'APP_IOS';
    public const ARTICLE_AudiencePackageGetV30DataAudiencePackagesLandingType = 'ARTICLE';
    public const AWEME_AudiencePackageGetV30DataAudiencePackagesLandingType = 'AWEME';
    public const DPA_AudiencePackageGetV30DataAudiencePackagesLandingType = 'DPA';
    public const EXTERNAL_AudiencePackageGetV30DataAudiencePackagesLandingType = 'EXTERNAL';
    public const GOODS_AudiencePackageGetV30DataAudiencePackagesLandingType = 'GOODS';
    public const LIVE_AudiencePackageGetV30DataAudiencePackagesLandingType = 'LIVE';
    public const MICRO_GAME_AudiencePackageGetV30DataAudiencePackagesLandingType = 'MICRO_GAME';
    public const QUICK_APP_AudiencePackageGetV30DataAudiencePackagesLandingType = 'QUICK_APP';
    public const SHOP_AudiencePackageGetV30DataAudiencePackagesLandingType = 'SHOP';
    public const STORE_AudiencePackageGetV30DataAudiencePackagesLandingType = 'STORE';

    public const ALLOWED_VALUES = [
        self::APP_AudiencePackageGetV30DataAudiencePackagesLandingType,
        self::APP_ANDROID_AudiencePackageGetV30DataAudiencePackagesLandingType,
        self::APP_HARMONY_AudiencePackageGetV30DataAudiencePackagesLandingType,
        self::APP_IOS_AudiencePackageGetV30DataAudiencePackagesLandingType,
        self::ARTICLE_AudiencePackageGetV30DataAudiencePackagesLandingType,
        self::AWEME_AudiencePackageGetV30DataAudiencePackagesLandingType,
        self::DPA_AudiencePackageGetV30DataAudiencePackagesLandingType,
        self::EXTERNAL_AudiencePackageGetV30DataAudiencePackagesLandingType,
        self::GOODS_AudiencePackageGetV30DataAudiencePackagesLandingType,
        self::LIVE_AudiencePackageGetV30DataAudiencePackagesLandingType,
        self::MICRO_GAME_AudiencePackageGetV30DataAudiencePackagesLandingType,
        self::QUICK_APP_AudiencePackageGetV30DataAudiencePackagesLandingType,
        self::SHOP_AudiencePackageGetV30DataAudiencePackagesLandingType,
        self::STORE_AudiencePackageGetV30DataAudiencePackagesLandingType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageGetV30DataAudiencePackagesLandingType', $value));
        }
        return (string) $value;
    }
}
