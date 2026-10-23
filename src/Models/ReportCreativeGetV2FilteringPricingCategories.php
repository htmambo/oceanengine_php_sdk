<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportCreativeGetV2FilteringPricingCategories
{
    public const PRICING_CATEGORY_NOC_ReportCreativeGetV2FilteringPricingCategories = 'PRICING_CATEGORY_NOC';
    public const PRICING_CATEGORY_BRAND_ReportCreativeGetV2FilteringPricingCategories = 'PRICING_CATEGORY_BRAND';
    public const PRICING_CATEGORY_FREE_ReportCreativeGetV2FilteringPricingCategories = 'PRICING_CATEGORY_FREE';
    public const PRICING_CATEGORY_BRAND_AND_PRICING_ReportCreativeGetV2FilteringPricingCategories = 'PRICING_CATEGORY_BRAND_AND_PRICING';
    public const PRICING_CATEGORY_BID_ReportCreativeGetV2FilteringPricingCategories = 'PRICING_CATEGORY_BID';

    public const ALLOWED_VALUES = [
        self::PRICING_CATEGORY_NOC_ReportCreativeGetV2FilteringPricingCategories,
        self::PRICING_CATEGORY_BRAND_ReportCreativeGetV2FilteringPricingCategories,
        self::PRICING_CATEGORY_FREE_ReportCreativeGetV2FilteringPricingCategories,
        self::PRICING_CATEGORY_BRAND_AND_PRICING_ReportCreativeGetV2FilteringPricingCategories,
        self::PRICING_CATEGORY_BID_ReportCreativeGetV2FilteringPricingCategories,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportCreativeGetV2FilteringPricingCategories', $value));
        }
        return (string) $value;
    }
}
