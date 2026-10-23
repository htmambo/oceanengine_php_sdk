<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AssetsCreativeComponentGetV2DataListComponentType
{
    public const CHOICE_MAGNET_AssetsCreativeComponentGetV2DataListComponentType = 'CHOICE_MAGNET';
    public const COMMERCE_MAGNET_AssetsCreativeComponentGetV2DataListComponentType = 'COMMERCE_MAGNET';
    public const COUPON_MAGNET_AssetsCreativeComponentGetV2DataListComponentType = 'COUPON_MAGNET';
    public const ECOMMERCE_CARD_AssetsCreativeComponentGetV2DataListComponentType = 'ECOMMERCE_CARD';
    public const GAME_PACK_AssetsCreativeComponentGetV2DataListComponentType = 'GAME_PACK';
    public const HALF_INTERACTIVE_AssetsCreativeComponentGetV2DataListComponentType = 'HALF_INTERACTIVE';
    public const IMAGE_MAGNET_AssetsCreativeComponentGetV2DataListComponentType = 'IMAGE_MAGNET';
    public const LIGHT_INTER_ACTIVE_AssetsCreativeComponentGetV2DataListComponentType = 'LIGHT_INTER_ACTIVE';
    public const LUCKY_BOX_AssetsCreativeComponentGetV2DataListComponentType = 'LUCKY_BOX';
    public const PROMOTION_CARD_AssetsCreativeComponentGetV2DataListComponentType = 'PROMOTION_CARD';
    public const RESERVATION_BUTTON_AssetsCreativeComponentGetV2DataListComponentType = 'RESERVATION_BUTTON';
    public const UNION_LIGHT_INTERACTIVE_AssetsCreativeComponentGetV2DataListComponentType = 'UNION_LIGHT_INTERACTIVE';
    public const VOTE_MAGNET_AssetsCreativeComponentGetV2DataListComponentType = 'VOTE_MAGNET';

    public const ALLOWED_VALUES = [
        self::CHOICE_MAGNET_AssetsCreativeComponentGetV2DataListComponentType,
        self::COMMERCE_MAGNET_AssetsCreativeComponentGetV2DataListComponentType,
        self::COUPON_MAGNET_AssetsCreativeComponentGetV2DataListComponentType,
        self::ECOMMERCE_CARD_AssetsCreativeComponentGetV2DataListComponentType,
        self::GAME_PACK_AssetsCreativeComponentGetV2DataListComponentType,
        self::HALF_INTERACTIVE_AssetsCreativeComponentGetV2DataListComponentType,
        self::IMAGE_MAGNET_AssetsCreativeComponentGetV2DataListComponentType,
        self::LIGHT_INTER_ACTIVE_AssetsCreativeComponentGetV2DataListComponentType,
        self::LUCKY_BOX_AssetsCreativeComponentGetV2DataListComponentType,
        self::PROMOTION_CARD_AssetsCreativeComponentGetV2DataListComponentType,
        self::RESERVATION_BUTTON_AssetsCreativeComponentGetV2DataListComponentType,
        self::UNION_LIGHT_INTERACTIVE_AssetsCreativeComponentGetV2DataListComponentType,
        self::VOTE_MAGNET_AssetsCreativeComponentGetV2DataListComponentType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AssetsCreativeComponentGetV2DataListComponentType', $value));
        }
        return (string) $value;
    }
}
