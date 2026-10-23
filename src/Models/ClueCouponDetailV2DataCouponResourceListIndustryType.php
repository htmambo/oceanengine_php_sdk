<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ClueCouponDetailV2DataCouponResourceListIndustryType
{
    public const ENTERTAINMENT_ClueCouponDetailV2DataCouponResourceListIndustryType = 'ENTERTAINMENT';
    public const TICKET_ClueCouponDetailV2DataCouponResourceListIndustryType = 'TICKET';
    public const FINANCIAL_ClueCouponDetailV2DataCouponResourceListIndustryType = 'FINANCIAL';
    public const GAME_ClueCouponDetailV2DataCouponResourceListIndustryType = 'GAME';
    public const FOOD_ClueCouponDetailV2DataCouponResourceListIndustryType = 'FOOD';
    public const OTHER_ClueCouponDetailV2DataCouponResourceListIndustryType = 'OTHER';

    public const ALLOWED_VALUES = [
        self::ENTERTAINMENT_ClueCouponDetailV2DataCouponResourceListIndustryType,
        self::TICKET_ClueCouponDetailV2DataCouponResourceListIndustryType,
        self::FINANCIAL_ClueCouponDetailV2DataCouponResourceListIndustryType,
        self::GAME_ClueCouponDetailV2DataCouponResourceListIndustryType,
        self::FOOD_ClueCouponDetailV2DataCouponResourceListIndustryType,
        self::OTHER_ClueCouponDetailV2DataCouponResourceListIndustryType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ClueCouponDetailV2DataCouponResourceListIndustryType', $value));
        }
        return (string) $value;
    }
}
