<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ClueCouponDetailV2DataCouponResourceListResourceType
{
    public const PHYSICAL_ClueCouponDetailV2DataCouponResourceListResourceType = 'PHYSICAL';
    public const FULL_ClueCouponDetailV2DataCouponResourceListResourceType = 'FULL';
    public const GAME_ClueCouponDetailV2DataCouponResourceListResourceType = 'GAME';
    public const COMMON_ClueCouponDetailV2DataCouponResourceListResourceType = 'COMMON';
    public const DISCOUNT_ClueCouponDetailV2DataCouponResourceListResourceType = 'DISCOUNT';

    public const ALLOWED_VALUES = [
        self::PHYSICAL_ClueCouponDetailV2DataCouponResourceListResourceType,
        self::FULL_ClueCouponDetailV2DataCouponResourceListResourceType,
        self::GAME_ClueCouponDetailV2DataCouponResourceListResourceType,
        self::COMMON_ClueCouponDetailV2DataCouponResourceListResourceType,
        self::DISCOUNT_ClueCouponDetailV2DataCouponResourceListResourceType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ClueCouponDetailV2DataCouponResourceListResourceType', $value));
        }
        return (string) $value;
    }
}
