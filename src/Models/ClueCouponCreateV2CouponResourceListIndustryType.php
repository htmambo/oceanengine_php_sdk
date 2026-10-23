<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ClueCouponCreateV2CouponResourceListIndustryType
{
    public const ENTERTAINMENT_ClueCouponCreateV2CouponResourceListIndustryType = 'ENTERTAINMENT';
    public const TICKET_ClueCouponCreateV2CouponResourceListIndustryType = 'TICKET';
    public const FINANCIAL_ClueCouponCreateV2CouponResourceListIndustryType = 'FINANCIAL';
    public const GAME_ClueCouponCreateV2CouponResourceListIndustryType = 'GAME';
    public const FOOD_ClueCouponCreateV2CouponResourceListIndustryType = 'FOOD';
    public const OTHER_ClueCouponCreateV2CouponResourceListIndustryType = 'OTHER';

    public const ALLOWED_VALUES = [
        self::ENTERTAINMENT_ClueCouponCreateV2CouponResourceListIndustryType,
        self::TICKET_ClueCouponCreateV2CouponResourceListIndustryType,
        self::FINANCIAL_ClueCouponCreateV2CouponResourceListIndustryType,
        self::GAME_ClueCouponCreateV2CouponResourceListIndustryType,
        self::FOOD_ClueCouponCreateV2CouponResourceListIndustryType,
        self::OTHER_ClueCouponCreateV2CouponResourceListIndustryType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ClueCouponCreateV2CouponResourceListIndustryType', $value));
        }
        return (string) $value;
    }
}
