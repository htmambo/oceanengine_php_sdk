<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ClueCouponGetV2DataListCouponResourceListResourceType
{
    public const PHYSICAL_ClueCouponGetV2DataListCouponResourceListResourceType = 'PHYSICAL';
    public const FULL_ClueCouponGetV2DataListCouponResourceListResourceType = 'FULL';
    public const GAME_ClueCouponGetV2DataListCouponResourceListResourceType = 'GAME';
    public const COMMON_ClueCouponGetV2DataListCouponResourceListResourceType = 'COMMON';
    public const DISCOUNT_ClueCouponGetV2DataListCouponResourceListResourceType = 'DISCOUNT';

    public const ALLOWED_VALUES = [
        self::PHYSICAL_ClueCouponGetV2DataListCouponResourceListResourceType,
        self::FULL_ClueCouponGetV2DataListCouponResourceListResourceType,
        self::GAME_ClueCouponGetV2DataListCouponResourceListResourceType,
        self::COMMON_ClueCouponGetV2DataListCouponResourceListResourceType,
        self::DISCOUNT_ClueCouponGetV2DataListCouponResourceListResourceType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ClueCouponGetV2DataListCouponResourceListResourceType', $value));
        }
        return (string) $value;
    }
}
