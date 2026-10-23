<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportAdGetV2FilteringPricingCategories
{
    public const PRICING_CATEGORY_NOC_ReportAdGetV2FilteringPricingCategories = 'PRICING_CATEGORY_NOC';
    public const PRICING_CATEGORY_BRAND_ReportAdGetV2FilteringPricingCategories = 'PRICING_CATEGORY_BRAND';
    public const PRICING_CATEGORY_FREE_ReportAdGetV2FilteringPricingCategories = 'PRICING_CATEGORY_FREE';
    public const PRICING_CATEGORY_BRAND_AND_PRICING_ReportAdGetV2FilteringPricingCategories = 'PRICING_CATEGORY_BRAND_AND_PRICING';
    public const PRICING_CATEGORY_BID_ReportAdGetV2FilteringPricingCategories = 'PRICING_CATEGORY_BID';

    public const ALLOWED_VALUES = [
        self::PRICING_CATEGORY_NOC_ReportAdGetV2FilteringPricingCategories,
        self::PRICING_CATEGORY_BRAND_ReportAdGetV2FilteringPricingCategories,
        self::PRICING_CATEGORY_FREE_ReportAdGetV2FilteringPricingCategories,
        self::PRICING_CATEGORY_BRAND_AND_PRICING_ReportAdGetV2FilteringPricingCategories,
        self::PRICING_CATEGORY_BID_ReportAdGetV2FilteringPricingCategories,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportAdGetV2FilteringPricingCategories', $value));
        }
        return (string) $value;
    }
}
