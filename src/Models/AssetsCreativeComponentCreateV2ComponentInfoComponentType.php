<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AssetsCreativeComponentCreateV2ComponentInfoComponentType
{
    public const RESERVATION_BUTTON_AssetsCreativeComponentCreateV2ComponentInfoComponentType = 'RESERVATION_BUTTON';
    public const COMMERCE_MAGNET_AssetsCreativeComponentCreateV2ComponentInfoComponentType = 'COMMERCE_MAGNET';
    public const VOTE_MAGNET_AssetsCreativeComponentCreateV2ComponentInfoComponentType = 'VOTE_MAGNET';
    public const HALF_INTERACTIVE_AssetsCreativeComponentCreateV2ComponentInfoComponentType = 'HALF_INTERACTIVE';
    public const PROMOTION_CARD_AssetsCreativeComponentCreateV2ComponentInfoComponentType = 'PROMOTION_CARD';
    public const UNION_LIGHT_INTERACTIVE_AssetsCreativeComponentCreateV2ComponentInfoComponentType = 'UNION_LIGHT_INTERACTIVE';
    public const LUCKY_BOX_AssetsCreativeComponentCreateV2ComponentInfoComponentType = 'LUCKY_BOX';
    public const COUPON_MAGNET_AssetsCreativeComponentCreateV2ComponentInfoComponentType = 'COUPON_MAGNET';
    public const IMAGE_MAGNET_AssetsCreativeComponentCreateV2ComponentInfoComponentType = 'IMAGE_MAGNET';
    public const ECOMMERCE_CARD_AssetsCreativeComponentCreateV2ComponentInfoComponentType = 'ECOMMERCE_CARD';
    public const GAME_PACK_AssetsCreativeComponentCreateV2ComponentInfoComponentType = 'GAME_PACK';
    public const LIGHT_INTER_ACTIVE_AssetsCreativeComponentCreateV2ComponentInfoComponentType = 'LIGHT_INTER_ACTIVE';
    public const CHOICE_MAGNET_AssetsCreativeComponentCreateV2ComponentInfoComponentType = 'CHOICE_MAGNET';

    public const ALLOWED_VALUES = [
        self::RESERVATION_BUTTON_AssetsCreativeComponentCreateV2ComponentInfoComponentType,
        self::COMMERCE_MAGNET_AssetsCreativeComponentCreateV2ComponentInfoComponentType,
        self::VOTE_MAGNET_AssetsCreativeComponentCreateV2ComponentInfoComponentType,
        self::HALF_INTERACTIVE_AssetsCreativeComponentCreateV2ComponentInfoComponentType,
        self::PROMOTION_CARD_AssetsCreativeComponentCreateV2ComponentInfoComponentType,
        self::UNION_LIGHT_INTERACTIVE_AssetsCreativeComponentCreateV2ComponentInfoComponentType,
        self::LUCKY_BOX_AssetsCreativeComponentCreateV2ComponentInfoComponentType,
        self::COUPON_MAGNET_AssetsCreativeComponentCreateV2ComponentInfoComponentType,
        self::IMAGE_MAGNET_AssetsCreativeComponentCreateV2ComponentInfoComponentType,
        self::ECOMMERCE_CARD_AssetsCreativeComponentCreateV2ComponentInfoComponentType,
        self::GAME_PACK_AssetsCreativeComponentCreateV2ComponentInfoComponentType,
        self::LIGHT_INTER_ACTIVE_AssetsCreativeComponentCreateV2ComponentInfoComponentType,
        self::CHOICE_MAGNET_AssetsCreativeComponentCreateV2ComponentInfoComponentType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AssetsCreativeComponentCreateV2ComponentInfoComponentType', $value));
        }
        return (string) $value;
    }
}
