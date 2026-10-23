<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ClueCouponCreateV2CouponResourceListResourceType
{
    public const PHYSICAL_ClueCouponCreateV2CouponResourceListResourceType = 'PHYSICAL';
    public const FULL_ClueCouponCreateV2CouponResourceListResourceType = 'FULL';
    public const GAME_ClueCouponCreateV2CouponResourceListResourceType = 'GAME';
    public const COMMON_ClueCouponCreateV2CouponResourceListResourceType = 'COMMON';
    public const DISCOUNT_ClueCouponCreateV2CouponResourceListResourceType = 'DISCOUNT';

    public const ALLOWED_VALUES = [
        self::PHYSICAL_ClueCouponCreateV2CouponResourceListResourceType,
        self::FULL_ClueCouponCreateV2CouponResourceListResourceType,
        self::GAME_ClueCouponCreateV2CouponResourceListResourceType,
        self::COMMON_ClueCouponCreateV2CouponResourceListResourceType,
        self::DISCOUNT_ClueCouponCreateV2CouponResourceListResourceType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ClueCouponCreateV2CouponResourceListResourceType', $value));
        }
        return (string) $value;
    }
}
