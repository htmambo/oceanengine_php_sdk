<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AssetsCreativeComponentGetV2FilteringComponentTypes
{
    public const CHOICE_MAGNET_AssetsCreativeComponentGetV2FilteringComponentTypes = 'CHOICE_MAGNET';
    public const COMMERCE_MAGNET_AssetsCreativeComponentGetV2FilteringComponentTypes = 'COMMERCE_MAGNET';
    public const COUPON_MAGNET_AssetsCreativeComponentGetV2FilteringComponentTypes = 'COUPON_MAGNET';
    public const ECOMMERCE_CARD_AssetsCreativeComponentGetV2FilteringComponentTypes = 'ECOMMERCE_CARD';
    public const GAME_PACK_AssetsCreativeComponentGetV2FilteringComponentTypes = 'GAME_PACK';
    public const HALF_INTERACTIVE_AssetsCreativeComponentGetV2FilteringComponentTypes = 'HALF_INTERACTIVE';
    public const IMAGE_MAGNET_AssetsCreativeComponentGetV2FilteringComponentTypes = 'IMAGE_MAGNET';
    public const LIGHT_INTER_ACTIVE_AssetsCreativeComponentGetV2FilteringComponentTypes = 'LIGHT_INTER_ACTIVE';
    public const LUCKY_BOX_AssetsCreativeComponentGetV2FilteringComponentTypes = 'LUCKY_BOX';
    public const PROMOTION_CARD_AssetsCreativeComponentGetV2FilteringComponentTypes = 'PROMOTION_CARD';
    public const RESERVATION_BUTTON_AssetsCreativeComponentGetV2FilteringComponentTypes = 'RESERVATION_BUTTON';
    public const UNION_LIGHT_INTERACTIVE_AssetsCreativeComponentGetV2FilteringComponentTypes = 'UNION_LIGHT_INTERACTIVE';
    public const VOTE_MAGNET_AssetsCreativeComponentGetV2FilteringComponentTypes = 'VOTE_MAGNET';

    public const ALLOWED_VALUES = [
        self::CHOICE_MAGNET_AssetsCreativeComponentGetV2FilteringComponentTypes,
        self::COMMERCE_MAGNET_AssetsCreativeComponentGetV2FilteringComponentTypes,
        self::COUPON_MAGNET_AssetsCreativeComponentGetV2FilteringComponentTypes,
        self::ECOMMERCE_CARD_AssetsCreativeComponentGetV2FilteringComponentTypes,
        self::GAME_PACK_AssetsCreativeComponentGetV2FilteringComponentTypes,
        self::HALF_INTERACTIVE_AssetsCreativeComponentGetV2FilteringComponentTypes,
        self::IMAGE_MAGNET_AssetsCreativeComponentGetV2FilteringComponentTypes,
        self::LIGHT_INTER_ACTIVE_AssetsCreativeComponentGetV2FilteringComponentTypes,
        self::LUCKY_BOX_AssetsCreativeComponentGetV2FilteringComponentTypes,
        self::PROMOTION_CARD_AssetsCreativeComponentGetV2FilteringComponentTypes,
        self::RESERVATION_BUTTON_AssetsCreativeComponentGetV2FilteringComponentTypes,
        self::UNION_LIGHT_INTERACTIVE_AssetsCreativeComponentGetV2FilteringComponentTypes,
        self::VOTE_MAGNET_AssetsCreativeComponentGetV2FilteringComponentTypes,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AssetsCreativeComponentGetV2FilteringComponentTypes', $value));
        }
        return (string) $value;
    }
}
