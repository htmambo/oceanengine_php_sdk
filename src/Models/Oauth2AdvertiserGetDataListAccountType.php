<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class Oauth2AdvertiserGetDataListAccountType
{
    public const ADVERTISER_Oauth2AdvertiserGetDataListAccountType = 'ADVERTISER';
    public const AGENT_Oauth2AdvertiserGetDataListAccountType = 'AGENT';
    public const AGENT_SYSTEM_ACCOUNT_Oauth2AdvertiserGetDataListAccountType = 'AGENT_SYSTEM_ACCOUNT';
    public const CHILD_AGENT_Oauth2AdvertiserGetDataListAccountType = 'CHILD_AGENT';
    public const CUSTOMER_ADMIN_Oauth2AdvertiserGetDataListAccountType = 'CUSTOMER_ADMIN';
    public const CUSTOMER_OPERATOR_Oauth2AdvertiserGetDataListAccountType = 'CUSTOMER_OPERATOR';
    public const PLATFORM_ROLE_AD_EXCHANGE_RTB_ADMIN_Oauth2AdvertiserGetDataListAccountType = 'PLATFORM_ROLE_AD_EXCHANGE_RTB_ADMIN';
    public const PLATFORM_ROLE_AD_EXCHANGE_RTB_OPERATOR_Oauth2AdvertiserGetDataListAccountType = 'PLATFORM_ROLE_AD_EXCHANGE_RTB_OPERATOR';
    public const PLATFORM_ROLE_AWEME_Oauth2AdvertiserGetDataListAccountType = 'PLATFORM_ROLE_AWEME';
    public const PLATFORM_ROLE_ENTERPRISE_BP_ADMIN_Oauth2AdvertiserGetDataListAccountType = 'PLATFORM_ROLE_ENTERPRISE_BP_ADMIN';
    public const PLATFORM_ROLE_ENTERPRISE_BP_OPERATOR_Oauth2AdvertiserGetDataListAccountType = 'PLATFORM_ROLE_ENTERPRISE_BP_OPERATOR';
    public const PLATFORM_ROLE_ENTERPRISE_BP_CUSTOM_Oauth2AdvertiserGetDataListAccountType = 'PLATFORM_ROLE_ENTERPRISE_BP_CUSTOM';
    public const PLATFORM_ROLE_GROUP_BP_ADMIN_Oauth2AdvertiserGetDataListAccountType = 'PLATFORM_ROLE_GROUP_BP_ADMIN';
    public const PLATFORM_ROLE_GROUP_BP_OPERATOR_Oauth2AdvertiserGetDataListAccountType = 'PLATFORM_ROLE_GROUP_BP_OPERATOR';
    public const PLATFORM_ROLE_LIFE_Oauth2AdvertiserGetDataListAccountType = 'PLATFORM_ROLE_LIFE';
    public const PLATFORM_ROLE_LOCAL_AGENT_Oauth2AdvertiserGetDataListAccountType = 'PLATFORM_ROLE_LOCAL_AGENT';
    public const PLATFORM_ROLE_QIANCHUAN_AGENT_Oauth2AdvertiserGetDataListAccountType = 'PLATFORM_ROLE_QIANCHUAN_AGENT';
    public const PLATFORM_ROLE_SHOP_ACCOUNT_Oauth2AdvertiserGetDataListAccountType = 'PLATFORM_ROLE_SHOP_ACCOUNT';
    public const PLATFORM_ROLE_STAR_Oauth2AdvertiserGetDataListAccountType = 'PLATFORM_ROLE_STAR';
    public const PLATFORM_ROLE_STAR_AGENT_Oauth2AdvertiserGetDataListAccountType = 'PLATFORM_ROLE_STAR_AGENT';
    public const PLATFORM_ROLE_STAR_ISV_Oauth2AdvertiserGetDataListAccountType = 'PLATFORM_ROLE_STAR_ISV';
    public const PLATFORM_ROLE_STAR_MCN_Oauth2AdvertiserGetDataListAccountType = 'PLATFORM_ROLE_STAR_MCN';
    public const PLATFORM_ROLE_YUNTU_BRAND_ISV_ADMIN_Oauth2AdvertiserGetDataListAccountType = 'PLATFORM_ROLE_YUNTU_BRAND_ISV_ADMIN';

    public const ALLOWED_VALUES = [
        self::ADVERTISER_Oauth2AdvertiserGetDataListAccountType,
        self::AGENT_Oauth2AdvertiserGetDataListAccountType,
        self::AGENT_SYSTEM_ACCOUNT_Oauth2AdvertiserGetDataListAccountType,
        self::CHILD_AGENT_Oauth2AdvertiserGetDataListAccountType,
        self::CUSTOMER_ADMIN_Oauth2AdvertiserGetDataListAccountType,
        self::CUSTOMER_OPERATOR_Oauth2AdvertiserGetDataListAccountType,
        self::PLATFORM_ROLE_AD_EXCHANGE_RTB_ADMIN_Oauth2AdvertiserGetDataListAccountType,
        self::PLATFORM_ROLE_AD_EXCHANGE_RTB_OPERATOR_Oauth2AdvertiserGetDataListAccountType,
        self::PLATFORM_ROLE_AWEME_Oauth2AdvertiserGetDataListAccountType,
        self::PLATFORM_ROLE_ENTERPRISE_BP_ADMIN_Oauth2AdvertiserGetDataListAccountType,
        self::PLATFORM_ROLE_ENTERPRISE_BP_OPERATOR_Oauth2AdvertiserGetDataListAccountType,
        self::PLATFORM_ROLE_ENTERPRISE_BP_CUSTOM_Oauth2AdvertiserGetDataListAccountType,
        self::PLATFORM_ROLE_GROUP_BP_ADMIN_Oauth2AdvertiserGetDataListAccountType,
        self::PLATFORM_ROLE_GROUP_BP_OPERATOR_Oauth2AdvertiserGetDataListAccountType,
        self::PLATFORM_ROLE_LIFE_Oauth2AdvertiserGetDataListAccountType,
        self::PLATFORM_ROLE_LOCAL_AGENT_Oauth2AdvertiserGetDataListAccountType,
        self::PLATFORM_ROLE_QIANCHUAN_AGENT_Oauth2AdvertiserGetDataListAccountType,
        self::PLATFORM_ROLE_SHOP_ACCOUNT_Oauth2AdvertiserGetDataListAccountType,
        self::PLATFORM_ROLE_STAR_Oauth2AdvertiserGetDataListAccountType,
        self::PLATFORM_ROLE_STAR_AGENT_Oauth2AdvertiserGetDataListAccountType,
        self::PLATFORM_ROLE_STAR_ISV_Oauth2AdvertiserGetDataListAccountType,
        self::PLATFORM_ROLE_STAR_MCN_Oauth2AdvertiserGetDataListAccountType,
        self::PLATFORM_ROLE_YUNTU_BRAND_ISV_ADMIN_Oauth2AdvertiserGetDataListAccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum Oauth2AdvertiserGetDataListAccountType', $value));
        }
        return (string) $value;
    }
}
