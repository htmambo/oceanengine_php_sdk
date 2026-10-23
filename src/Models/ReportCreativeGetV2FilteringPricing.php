<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportCreativeGetV2FilteringPricing
{
    public const PRICING_CPV_ReportCreativeGetV2FilteringPricing = 'PRICING_CPV';
    public const PRICING_CPM_ReportCreativeGetV2FilteringPricing = 'PRICING_CPM';
    public const PRICING_CPC_OCPM_ReportCreativeGetV2FilteringPricing = 'PRICING_CPC_OCPM';
    public const PRICING_CPC_ReportCreativeGetV2FilteringPricing = 'PRICING_CPC';
    public const PRICING_OCPM_ReportCreativeGetV2FilteringPricing = 'PRICING_OCPM';
    public const PRICING_OCPC_ReportCreativeGetV2FilteringPricing = 'PRICING_OCPC';
    public const PRICING_CPA_ReportCreativeGetV2FilteringPricing = 'PRICING_CPA';

    public const ALLOWED_VALUES = [
        self::PRICING_CPV_ReportCreativeGetV2FilteringPricing,
        self::PRICING_CPM_ReportCreativeGetV2FilteringPricing,
        self::PRICING_CPC_OCPM_ReportCreativeGetV2FilteringPricing,
        self::PRICING_CPC_ReportCreativeGetV2FilteringPricing,
        self::PRICING_OCPM_ReportCreativeGetV2FilteringPricing,
        self::PRICING_OCPC_ReportCreativeGetV2FilteringPricing,
        self::PRICING_CPA_ReportCreativeGetV2FilteringPricing,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportCreativeGetV2FilteringPricing', $value));
        }
        return (string) $value;
    }
}
