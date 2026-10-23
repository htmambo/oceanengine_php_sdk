<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportAdGetV2FilteringPricing
{
    public const PRICING_CPV_ReportAdGetV2FilteringPricing = 'PRICING_CPV';
    public const PRICING_CPM_ReportAdGetV2FilteringPricing = 'PRICING_CPM';
    public const PRICING_ECPC_ReportAdGetV2FilteringPricing = 'PRICING_ECPC';
    public const PRICING_CPC_ReportAdGetV2FilteringPricing = 'PRICING_CPC';
    public const PRICING_OCPM_ReportAdGetV2FilteringPricing = 'PRICING_OCPM';
    public const PRICING_OCPC_ReportAdGetV2FilteringPricing = 'PRICING_OCPC';
    public const PRICING_CPA_ReportAdGetV2FilteringPricing = 'PRICING_CPA';

    public const ALLOWED_VALUES = [
        self::PRICING_CPV_ReportAdGetV2FilteringPricing,
        self::PRICING_CPM_ReportAdGetV2FilteringPricing,
        self::PRICING_ECPC_ReportAdGetV2FilteringPricing,
        self::PRICING_CPC_ReportAdGetV2FilteringPricing,
        self::PRICING_OCPM_ReportAdGetV2FilteringPricing,
        self::PRICING_OCPC_ReportAdGetV2FilteringPricing,
        self::PRICING_CPA_ReportAdGetV2FilteringPricing,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportAdGetV2FilteringPricing', $value));
        }
        return (string) $value;
    }
}
