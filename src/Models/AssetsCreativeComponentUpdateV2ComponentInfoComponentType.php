<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AssetsCreativeComponentUpdateV2ComponentInfoComponentType
{
    public const RESERVATION_BUTTON_AssetsCreativeComponentUpdateV2ComponentInfoComponentType = 'RESERVATION_BUTTON';
    public const COMMERCE_MAGNET_AssetsCreativeComponentUpdateV2ComponentInfoComponentType = 'COMMERCE_MAGNET';
    public const VOTE_MAGNET_AssetsCreativeComponentUpdateV2ComponentInfoComponentType = 'VOTE_MAGNET';
    public const HALF_INTERACTIVE_AssetsCreativeComponentUpdateV2ComponentInfoComponentType = 'HALF_INTERACTIVE';
    public const PROMOTION_CARD_AssetsCreativeComponentUpdateV2ComponentInfoComponentType = 'PROMOTION_CARD';
    public const UNION_LIGHT_INTERACTIVE_AssetsCreativeComponentUpdateV2ComponentInfoComponentType = 'UNION_LIGHT_INTERACTIVE';
    public const LUCKY_BOX_AssetsCreativeComponentUpdateV2ComponentInfoComponentType = 'LUCKY_BOX';
    public const COUPON_MAGNET_AssetsCreativeComponentUpdateV2ComponentInfoComponentType = 'COUPON_MAGNET';
    public const IMAGE_MAGNET_AssetsCreativeComponentUpdateV2ComponentInfoComponentType = 'IMAGE_MAGNET';
    public const ECOMMERCE_CARD_AssetsCreativeComponentUpdateV2ComponentInfoComponentType = 'ECOMMERCE_CARD';
    public const GAME_PACK_AssetsCreativeComponentUpdateV2ComponentInfoComponentType = 'GAME_PACK';
    public const LIGHT_INTER_ACTIVE_AssetsCreativeComponentUpdateV2ComponentInfoComponentType = 'LIGHT_INTER_ACTIVE';
    public const CHOICE_MAGNET_AssetsCreativeComponentUpdateV2ComponentInfoComponentType = 'CHOICE_MAGNET';

    public const ALLOWED_VALUES = [
        self::RESERVATION_BUTTON_AssetsCreativeComponentUpdateV2ComponentInfoComponentType,
        self::COMMERCE_MAGNET_AssetsCreativeComponentUpdateV2ComponentInfoComponentType,
        self::VOTE_MAGNET_AssetsCreativeComponentUpdateV2ComponentInfoComponentType,
        self::HALF_INTERACTIVE_AssetsCreativeComponentUpdateV2ComponentInfoComponentType,
        self::PROMOTION_CARD_AssetsCreativeComponentUpdateV2ComponentInfoComponentType,
        self::UNION_LIGHT_INTERACTIVE_AssetsCreativeComponentUpdateV2ComponentInfoComponentType,
        self::LUCKY_BOX_AssetsCreativeComponentUpdateV2ComponentInfoComponentType,
        self::COUPON_MAGNET_AssetsCreativeComponentUpdateV2ComponentInfoComponentType,
        self::IMAGE_MAGNET_AssetsCreativeComponentUpdateV2ComponentInfoComponentType,
        self::ECOMMERCE_CARD_AssetsCreativeComponentUpdateV2ComponentInfoComponentType,
        self::GAME_PACK_AssetsCreativeComponentUpdateV2ComponentInfoComponentType,
        self::LIGHT_INTER_ACTIVE_AssetsCreativeComponentUpdateV2ComponentInfoComponentType,
        self::CHOICE_MAGNET_AssetsCreativeComponentUpdateV2ComponentInfoComponentType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AssetsCreativeComponentUpdateV2ComponentInfoComponentType', $value));
        }
        return (string) $value;
    }
}
