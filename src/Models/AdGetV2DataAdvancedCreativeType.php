<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdGetV2DataAdvancedCreativeType
{
    public const ATTACHED_CREATIVE_PHONE_AdGetV2DataAdvancedCreativeType = 'ATTACHED_CREATIVE_PHONE';
    public const ATTACHED_CREATIVE_CARD_AdGetV2DataAdvancedCreativeType = 'ATTACHED_CREATIVE_CARD';
    public const ATTACHED_CREATIVE_INTERACT_AdGetV2DataAdvancedCreativeType = 'ATTACHED_CREATIVE_INTERACT';
    public const ATTACHED_CREATIVE_VOTE_INTERACT_AdGetV2DataAdvancedCreativeType = 'ATTACHED_CREATIVE_VOTE_INTERACT';
    public const ATTACHED_CREATIVE_GAME_PACKAGE_AdGetV2DataAdvancedCreativeType = 'ATTACHED_CREATIVE_GAME_PACKAGE';
    public const ATTACHED_CREATIVE_COUPON_INTERACT_AdGetV2DataAdvancedCreativeType = 'ATTACHED_CREATIVE_COUPON_INTERACT';
    public const ATTACHED_CREATIVE_GAME_SUBSCRIBE_AdGetV2DataAdvancedCreativeType = 'ATTACHED_CREATIVE_GAME_SUBSCRIBE';
    public const ATTACHED_CREATIVE_COMMERCE_CARD_AdGetV2DataAdvancedCreativeType = 'ATTACHED_CREATIVE_COMMERCE_CARD';
    public const ATTACHED_CREATIVE_LIVE_CARD_AdGetV2DataAdvancedCreativeType = 'ATTACHED_CREATIVE_LIVE_CARD';
    public const ATTACHED_CREATIVE_DOWNLOAD_CARD_AdGetV2DataAdvancedCreativeType = 'ATTACHED_CREATIVE_DOWNLOAD_CARD';
    public const ATTACHED_CREATIVE_GAME_FORM_AdGetV2DataAdvancedCreativeType = 'ATTACHED_CREATIVE_GAME_FORM';
    public const ATTACHED_CREATIVE_SMART_PHONE_AdGetV2DataAdvancedCreativeType = 'ATTACHED_CREATIVE_SMART_PHONE';
    public const ATTACHED_CREATIVE_CONSULTANT_AdGetV2DataAdvancedCreativeType = 'ATTACHED_CREATIVE_CONSULTANT';
    public const ATTACHED_CREATIVE_APP_AdGetV2DataAdvancedCreativeType = 'ATTACHED_CREATIVE_APP';
    public const ATTACHED_CREATIVE_FORM_AdGetV2DataAdvancedCreativeType = 'ATTACHED_CREATIVE_FORM';
    public const ATTACHED_CREATIVE_NONE_AdGetV2DataAdvancedCreativeType = 'ATTACHED_CREATIVE_NONE';
    public const ATTACHED_CREATIVE_COUPON_AdGetV2DataAdvancedCreativeType = 'ATTACHED_CREATIVE_COUPON';

    public const ALLOWED_VALUES = [
        self::ATTACHED_CREATIVE_PHONE_AdGetV2DataAdvancedCreativeType,
        self::ATTACHED_CREATIVE_CARD_AdGetV2DataAdvancedCreativeType,
        self::ATTACHED_CREATIVE_INTERACT_AdGetV2DataAdvancedCreativeType,
        self::ATTACHED_CREATIVE_VOTE_INTERACT_AdGetV2DataAdvancedCreativeType,
        self::ATTACHED_CREATIVE_GAME_PACKAGE_AdGetV2DataAdvancedCreativeType,
        self::ATTACHED_CREATIVE_COUPON_INTERACT_AdGetV2DataAdvancedCreativeType,
        self::ATTACHED_CREATIVE_GAME_SUBSCRIBE_AdGetV2DataAdvancedCreativeType,
        self::ATTACHED_CREATIVE_COMMERCE_CARD_AdGetV2DataAdvancedCreativeType,
        self::ATTACHED_CREATIVE_LIVE_CARD_AdGetV2DataAdvancedCreativeType,
        self::ATTACHED_CREATIVE_DOWNLOAD_CARD_AdGetV2DataAdvancedCreativeType,
        self::ATTACHED_CREATIVE_GAME_FORM_AdGetV2DataAdvancedCreativeType,
        self::ATTACHED_CREATIVE_SMART_PHONE_AdGetV2DataAdvancedCreativeType,
        self::ATTACHED_CREATIVE_CONSULTANT_AdGetV2DataAdvancedCreativeType,
        self::ATTACHED_CREATIVE_APP_AdGetV2DataAdvancedCreativeType,
        self::ATTACHED_CREATIVE_FORM_AdGetV2DataAdvancedCreativeType,
        self::ATTACHED_CREATIVE_NONE_AdGetV2DataAdvancedCreativeType,
        self::ATTACHED_CREATIVE_COUPON_AdGetV2DataAdvancedCreativeType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdGetV2DataAdvancedCreativeType', $value));
        }
        return (string) $value;
    }
}
