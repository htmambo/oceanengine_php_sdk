<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportAdvertiserGetV2DataListPricing
{
    public const PRICING_CPV_ReportAdvertiserGetV2DataListPricing = 'PRICING_CPV';
    public const PRICING_CPM_ReportAdvertiserGetV2DataListPricing = 'PRICING_CPM';
    public const PRICING_ECPC_ReportAdvertiserGetV2DataListPricing = 'PRICING_ECPC';
    public const PRICING_CPC_ReportAdvertiserGetV2DataListPricing = 'PRICING_CPC';
    public const PRICING_OCPM_ReportAdvertiserGetV2DataListPricing = 'PRICING_OCPM';
    public const PRICING_OCPC_ReportAdvertiserGetV2DataListPricing = 'PRICING_OCPC';
    public const PRICING_CPA_ReportAdvertiserGetV2DataListPricing = 'PRICING_CPA';

    public const ALLOWED_VALUES = [
        self::PRICING_CPV_ReportAdvertiserGetV2DataListPricing,
        self::PRICING_CPM_ReportAdvertiserGetV2DataListPricing,
        self::PRICING_ECPC_ReportAdvertiserGetV2DataListPricing,
        self::PRICING_CPC_ReportAdvertiserGetV2DataListPricing,
        self::PRICING_OCPM_ReportAdvertiserGetV2DataListPricing,
        self::PRICING_OCPC_ReportAdvertiserGetV2DataListPricing,
        self::PRICING_CPA_ReportAdvertiserGetV2DataListPricing,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportAdvertiserGetV2DataListPricing', $value));
        }
        return (string) $value;
    }
}
