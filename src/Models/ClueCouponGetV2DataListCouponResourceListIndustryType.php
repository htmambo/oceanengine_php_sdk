<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ClueCouponGetV2DataListCouponResourceListIndustryType
{
    public const OTHER_ClueCouponGetV2DataListCouponResourceListIndustryType = 'OTHER';
    public const TICKET_ClueCouponGetV2DataListCouponResourceListIndustryType = 'TICKET';
    public const ENTERTAINMENT_ClueCouponGetV2DataListCouponResourceListIndustryType = 'ENTERTAINMENT';
    public const GAME_ClueCouponGetV2DataListCouponResourceListIndustryType = 'GAME';
    public const FINANCIAL_ClueCouponGetV2DataListCouponResourceListIndustryType = 'FINANCIAL';
    public const FOOD_ClueCouponGetV2DataListCouponResourceListIndustryType = 'FOOD';

    public const ALLOWED_VALUES = [
        self::OTHER_ClueCouponGetV2DataListCouponResourceListIndustryType,
        self::TICKET_ClueCouponGetV2DataListCouponResourceListIndustryType,
        self::ENTERTAINMENT_ClueCouponGetV2DataListCouponResourceListIndustryType,
        self::GAME_ClueCouponGetV2DataListCouponResourceListIndustryType,
        self::FINANCIAL_ClueCouponGetV2DataListCouponResourceListIndustryType,
        self::FOOD_ClueCouponGetV2DataListCouponResourceListIndustryType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ClueCouponGetV2DataListCouponResourceListIndustryType', $value));
        }
        return (string) $value;
    }
}
