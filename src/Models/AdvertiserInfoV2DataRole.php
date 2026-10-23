<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdvertiserInfoV2DataRole
{
    public const ROLE_ADMIN_AdvertiserInfoV2DataRole = 'ROLE_ADMIN';
    public const ROLE_ECP_ADVERTISER_AdvertiserInfoV2DataRole = 'ROLE_ECP_ADVERTISER';
    public const ROLE_AGENT_SYSTEM_ACCOUNT_AdvertiserInfoV2DataRole = 'ROLE_AGENT_SYSTEM_ACCOUNT';
    public const ROLE_ECP_CHILD_ADVERTISER_AdvertiserInfoV2DataRole = 'ROLE_ECP_CHILD_ADVERTISER';
    public const ROLE_ECP_INTERNAL_ADVERTISER_AdvertiserInfoV2DataRole = 'ROLE_ECP_INTERNAL_ADVERTISER';
    public const ROLE_DSP_ADVERTISER_AdvertiserInfoV2DataRole = 'ROLE_DSP_ADVERTISER';
    public const ROLE_CHILD_AGENT_AdvertiserInfoV2DataRole = 'ROLE_CHILD_AGENT';
    public const ROLE_PGC_ADVERTISER_AdvertiserInfoV2DataRole = 'ROLE_PGC_ADVERTISER';
    public const ROLE_ADVERTISER_AdvertiserInfoV2DataRole = 'ROLE_ADVERTISER';
    public const ROLE_LOCAL_LIFE_VIRTUAL_ADVERTISER_AdvertiserInfoV2DataRole = 'ROLE_LOCAL_LIFE_VIRTUAL_ADVERTISER';
    public const ROLE_AGENT_AdvertiserInfoV2DataRole = 'ROLE_AGENT';
    public const ROLE_AWEME_PROMOTION_ADVERTISER_AdvertiserInfoV2DataRole = 'ROLE_AWEME_PROMOTION_ADVERTISER';
    public const ROLE_AGENT_ABSTRACT_AdvertiserInfoV2DataRole = 'ROLE_AGENT_ABSTRACT';
    public const ROLE_LOCAL_LIFE_ADVERTISER_AdvertiserInfoV2DataRole = 'ROLE_LOCAL_LIFE_ADVERTISER';
    public const ROLE_INTERNAL_ADV_AdvertiserInfoV2DataRole = 'ROLE_INTERNAL_ADV';
    public const ROLE_LITE_ADVERTISER_AdvertiserInfoV2DataRole = 'ROLE_LITE_ADVERTISER';
    public const ROLE_ADVERTISER_SYSTEM_ACCOUNT_AdvertiserInfoV2DataRole = 'ROLE_ADVERTISER_SYSTEM_ACCOUNT';
    public const ROLE_MAJORDOMO_AdvertiserInfoV2DataRole = 'ROLE_MAJORDOMO';
    public const ROLE_ADVERTISER_ABSTRACT_AdvertiserInfoV2DataRole = 'ROLE_ADVERTISER_ABSTRACT';
    public const ROLE_HOTSOON_PROMOTION_ADVERTISER_AdvertiserInfoV2DataRole = 'ROLE_HOTSOON_PROMOTION_ADVERTISER';
    public const ROLE_CHILD_ADVERTISER_AdvertiserInfoV2DataRole = 'ROLE_CHILD_ADVERTISER';
    public const ROLE_DOUDIAN_ADVERTISER_AdvertiserInfoV2DataRole = 'ROLE_DOUDIAN_ADVERTISER';
    public const ROLE_HOTSOON_ADVERTISER_AdvertiserInfoV2DataRole = 'ROLE_HOTSOON_ADVERTISER';
    public const ROLE_LOCAL_LIFE_INTERNAL_ADVERTISER_AdvertiserInfoV2DataRole = 'ROLE_LOCAL_LIFE_INTERNAL_ADVERTISER';

    public const ALLOWED_VALUES = [
        self::ROLE_ADMIN_AdvertiserInfoV2DataRole,
        self::ROLE_ECP_ADVERTISER_AdvertiserInfoV2DataRole,
        self::ROLE_AGENT_SYSTEM_ACCOUNT_AdvertiserInfoV2DataRole,
        self::ROLE_ECP_CHILD_ADVERTISER_AdvertiserInfoV2DataRole,
        self::ROLE_ECP_INTERNAL_ADVERTISER_AdvertiserInfoV2DataRole,
        self::ROLE_DSP_ADVERTISER_AdvertiserInfoV2DataRole,
        self::ROLE_CHILD_AGENT_AdvertiserInfoV2DataRole,
        self::ROLE_PGC_ADVERTISER_AdvertiserInfoV2DataRole,
        self::ROLE_ADVERTISER_AdvertiserInfoV2DataRole,
        self::ROLE_LOCAL_LIFE_VIRTUAL_ADVERTISER_AdvertiserInfoV2DataRole,
        self::ROLE_AGENT_AdvertiserInfoV2DataRole,
        self::ROLE_AWEME_PROMOTION_ADVERTISER_AdvertiserInfoV2DataRole,
        self::ROLE_AGENT_ABSTRACT_AdvertiserInfoV2DataRole,
        self::ROLE_LOCAL_LIFE_ADVERTISER_AdvertiserInfoV2DataRole,
        self::ROLE_INTERNAL_ADV_AdvertiserInfoV2DataRole,
        self::ROLE_LITE_ADVERTISER_AdvertiserInfoV2DataRole,
        self::ROLE_ADVERTISER_SYSTEM_ACCOUNT_AdvertiserInfoV2DataRole,
        self::ROLE_MAJORDOMO_AdvertiserInfoV2DataRole,
        self::ROLE_ADVERTISER_ABSTRACT_AdvertiserInfoV2DataRole,
        self::ROLE_HOTSOON_PROMOTION_ADVERTISER_AdvertiserInfoV2DataRole,
        self::ROLE_CHILD_ADVERTISER_AdvertiserInfoV2DataRole,
        self::ROLE_DOUDIAN_ADVERTISER_AdvertiserInfoV2DataRole,
        self::ROLE_HOTSOON_ADVERTISER_AdvertiserInfoV2DataRole,
        self::ROLE_LOCAL_LIFE_INTERNAL_ADVERTISER_AdvertiserInfoV2DataRole,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdvertiserInfoV2DataRole', $value));
        }
        return (string) $value;
    }
}
